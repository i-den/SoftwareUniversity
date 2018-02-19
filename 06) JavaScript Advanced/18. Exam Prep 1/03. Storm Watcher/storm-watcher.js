(function result() {

    let id = 0;

    class Record {

        constructor(temperature, humidity, pressure, windSpeed) {

            this.id = id++;
            this.temperature = temperature;
            this.humidity = humidity;
            this.pressure = pressure;
            this.windSpeed = windSpeed;
        }

        toString() {
            let str = `Reading ID: ${this.id}\n`;
            str += `Temperature: ${this.temperature}*C\n`;
            str += `Relative Humidity: ${this.humidity}%\n`;
            str += `Pressure: ${this.pressure}hpa\n`;
            str += `Wind Speed: ${this.windSpeed}m/s\n`;
            str += `Weather: ${this.weather}`;
            return str;
        }

        get weather() {
            if (this.temperature < 20
            && (this.pressure < 700 || this.pressure > 900)
            && this.windSpeed > 25) {
                return "Stormy";
            }

            return "Not stormy";
        }
    }

    return Record;
})();