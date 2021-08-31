import MainPage from "./web/components/MainPage.svelte"
import Registration from './web/components/RegistrationPage.svelte'
import GetQRCode from './web/components/GetQRCode.svelte'
import Stat from './admin/stat.svelte'
import List from './admin/list.svelte'
import QRScanner from './web/components/QRReaderPage.svelte'
import StudentRegTNY from "./web/components/registration/StudentRegTNY.svelte";
import Student from './web/components/success/StudentPage.svelte';

// const routes ={
//
// }
// export default routes;


const routes = {

  // '/en/*' : MainPage,
  //   '/hu/*' :MainPage,
     '/' : MainPage,
    '/registration' : Student,
    // '/student' : Registration,
    '/qr/:code' : GetQRCode,
    // '/stat/:code': Stat,
     '/list/:code' : List,
    '/hihetetlen/mik/csippanto' : QRScanner,
    // '/registration': StudentRegTNY
}
export default  routes;