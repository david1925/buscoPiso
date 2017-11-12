function LocalsWarehousesUsers() {
    this.localwarehouseId;
    this.userId;
    
    this.construct = function (localWarehouseId, userId) {
        this.setLocalWarehouseId(localWarehouseId);
        this.setUserId(userId);
    }

    this.getLocalWarehouseId = function () {return this.localWarehouseId;}
    this.getUserId = function () {return this.userId;}

    this.setLocalWarehouseId = function (localWarehouseId) {this.localWarehouseId=localWarehouseId;}
    this.setUserId = function (userId) {this.userId=userId;}
}