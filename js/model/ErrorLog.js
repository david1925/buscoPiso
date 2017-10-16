function ErrorLog() {
    this.errorLogId;
    this.date;
    this.error;
    
    this.construct = function (errorLogId, date, error) {
        this.setErrorLogId(errorLogId);
        this.setDate(date);
        this.setError(error);
    }

    this.getErrorDate = function () {return this.errorLogId;}
    this.getDate = function () {return this.date;}
    this.getError = function () {return this.error;}

    this.setErrorLogId = function (errorLogId) {this.errorLogId=errorLogId;}
    this.setDate = function (date) {this.date=date;}
    this.setError = function (error) {this.error=error;}
}