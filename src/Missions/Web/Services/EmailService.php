<?php namespace Application\Missions\Web\Services;

use Application\Entity\Emailsender;
use Application\Entity\ParticipantsChambers;
use Application\Entity\ParticipantsGuests;
use Application\Entity\ParticipantsInstructor;
use Application\Entity\ParticipantsStudents;
use Atomino\Carbon\Database\Finder\Filter;
use mysql_xdevapi\Collection;
use PHPMailer\PHPMailer\PHPMailer;
use function Atomino\debug;

class EmailService
{

    /**
     * @throws \Atomino\Carbon\ValidationError
     */
    public function create($cast, array $data)
    {
        if ($cast instanceof ParticipantsStudents) {
            $dictionary = [
                '{{name}}' => $data['_name'],
                '{{email}}' => $data['_email'],
                '{{neptun}}' => $data['_neptun'],
                '{{major}}' => $data['_major'],
                '{{site_url}}' => 'event.mik.pte.hu',
                '{{qrcode}}' => $cast->getQRCode(),
            ];
            if($cast->lang === 'hu') {
                $template = file_get_contents(__DIR__ . '/resources/email_hu.html');
            }else if($cast->lang === 'en'){
                $template = file_get_contents(__DIR__ . '/resources/email_en.html');
            }
            $content = strtr($template, $dictionary);

            $email = Emailsender::create();
            if (($data['_participate'] === 1 || $data['_orientation'] !== 1)) {
                $email->toName = $data['_name'];
                $email->toEmail = $data['_email'];
                $email->toQr = $cast->getQRCode();
                $email->statusSent = false;
                $email->toContent = $content;
                $email->lang = $cast->lang;
                $email->save();
            }
        }

    }

//    /**
//     * @throws \PHPMailer\PHPMailer\Exception
//     */
//    public function fancyMail($cast, $content)
//    {
//        $mail = new PHPMailer(true);
//        $mail->isSMTP();
//        $mail->isHTML();
//        $mail->SMTPDebug = 0;
//        //$mail->SMTPDebug = SMTP::DEBUG_SERVER;
//        $mail->SMTPOptions = array(
//            'ssl' => array(
//                'verify_peer' => false,
//                'verify_peer_name' => false,
//                'allow_self_signed' => true
//            )
//        );
//        $mail->Host = gethostbyname('smtp.mik.pte.hu');
//        $mail->Port = 25;
//        $mail->SMTPAuth = false;
//        $mail->SMTPAutoTLS = false;
//        $mail->CharSet = 'UTF-8';
//        $mail->setFrom('mikpartners@mik.pte.hu', 'MIK Partners Regisztráció');
//        //$mail->addAddress($cast->email, $cast->name);
//        $mail->addAddress('rinnenbach.peter@mik.pte.hu', $cast->name);
//        $mail->addCC('petinho92@gmail.com', $cast->name);
//        $mail->msgHTML($content);
//        $mail->Subject = 'Sikeres regisztráció';
//        //$mail->Body = 'Ez egy tesztüzenet';
//        $mail->AltBody = 'MIK Partners Regisztráció';
//
//        if (!$mail->send()) {
//            debug('Mailer Error: ' . $mail->ErrorInfo);
//        } else {
//            debug('Message sent!');
//            $mail->SmtpClose();
//            //update sendStatus -> true
//        }
//    }
    public function getSentInfo()
    {
        $emailInfo = Emailsender::search()->collect();
        $array = array();
        foreach ($emailInfo as $info) {
            if($info->sentTime !== null)
            {
                $sentTimer= $info->sentTime->format("Y-m-d H:i:s");
            }else{
                $sentTimer = "";
            }
            array_push($array, (object)[
                'email' => $info->toEmail,
                'sendTime' => $sentTimer,
                'sendStatus' => $info->statusSent
            ]);
        }
        return $array;
    }


}
