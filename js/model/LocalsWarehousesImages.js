function LocalsWarehousesImages() {
    this.localWarehouseImagesId;
    this.name;
    this.localWarehouseId;

    this.construct = function (localWarehouseImagesId, name, localWarehouseId) {
        this.setLocalWarehouseImagesId(localWarehouseImagesId);
        this.setName(name);
        this.setLocalWarehouseId(localWarehouseId);
    }

    this.getLocalWarehouseImagesId = function () {return this.localWarehouseImagesId;}
    this.getName = function () {return this.name;}
    this.getLocalWarehouseId = function () {return this.localWarehouseId;}

    this.setLocalWarehouseImagesId = function (localWarehouseImagesId) {this.localWarehouseImagesId=localWarehouseImagesId;}
    this.setName = function (name) {this.name=name;}
    this.setLocalWarehouseId = function (localWarehousesId) {this.localWarehouseId=localWarehouseId;}
}