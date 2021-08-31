class StudentFormData {

    private _name : String = "";
    private _neptun : String = "";
    private _email : String = "";
    private _major : Number = 0;
    private _semester : Number = 0;
    private _mobile : String = "";
    private _participate : Number = 0;
    private _orientation : Number = 0;
    private _lang : String = "";

    public setCollection(collectionArray : NodeListOf<any>){
        this._name = collectionArray[0];
        this._neptun = collectionArray[1];
        this._email = collectionArray[2];
        this._major = collectionArray[3];
        this._semester = collectionArray[4];
        this._mobile = collectionArray[5];
        this._participate = collectionArray[6];
        this._orientation = collectionArray[7];
        this._lang = collectionArray[8];
    }

    get collection() : Array<any> {
        return [this._name, this._neptun, this._email, this._major, this._semester
        , this._mobile, this._participate, this._orientation, this._lang];
    }


    get lang(): String {
        return this._lang;
    }

    set lang(value: String) {
        this._lang = value;
    }

    get orientation(): Number {
        return this._orientation;
    }

    set orientation(value: Number) {
        this._orientation = value;
    }

    get name(): String {
        return this._name;
    }

    set name(value: String) {
        this._name = value;
    }

    get neptun(): String {
        return this._neptun;
    }

    set neptun(value: String) {
        this._neptun = value;
    }

    get email(): String {
        return this._email;
    }

    set email(value: String) {
        this._email = value;
    }

    get major(): Number {
        return this._major;
    }

    set major(value: Number) {
        this._major = value;
    }

    get semester(): Number {
        return this._semester;
    }

    set semester(value: Number) {
        this._semester = value;
    }

    get mobile(): String {
        return this._mobile;
    }

    set mobile(value: String) {
        this._mobile = value;
    }

    get participate(): Number {
        return this._participate;
    }

    set participate(value: Number) {
        this._participate = value;
    }
}export default StudentFormData;