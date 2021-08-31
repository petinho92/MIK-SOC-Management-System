class QRScannerFormData{
    private _station : Number = 0;
    private _phase : Number = 0;
    private _qr : String = "";

    public setCollection(collectionArray : NodeListOf<any>){
        this._station = collectionArray[0];
        this._phase = collectionArray[1];
        this._qr = collectionArray[2];
    }

    get collection() : Array<any>{
        return [this._station, this._phase, this._qr];
    }


    get station(): Number {
        return this._station;
    }

    set station(value: Number) {
        this._station = value;
    }

    get phase(): Number {
        return this._phase;
    }

    set phase(value: Number) {
        this._phase = value;
    }

    get qr(): String {
        return this._qr;
    }

    set qr(value: String) {
        this._qr = value;
    }
}export default QRScannerFormData;