(function () {
    Array.prototype.last = function () {
        return this[this.length - 1];
    };

    Array.prototype.skip = function (number) {
        return this.slice(number);
    };

    Array.prototype.take = function (number) {
        return this.slice(0, number);
    };

    Array.prototype.sum = function () {
        return this.reduce((a, e) => a + e);
    };

    Array.prototype.average = function () {
        return this.sum() / this.length;
    }
})()