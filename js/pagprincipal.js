let selectedElement = null;

        function selectGreenhouse(name, element) {
            
            if (selectedElement) {
                selectedElement.classList.remove('selected');
            }

           
            element.classList.add('selected');
            selectedElement = element;

            
            const data = getGreenhouseData(name);
            
            
            document.getElementById('temperature').textContent = data.temperature + "°C";
            document.getElementById('humidity').textContent = data.humidity + "%";
            document.getElementById('light-level').textContent = data.lightLevel;
            document.getElementById('light-level').style.color = data.lightLevel === 'BOA' ? 'green' : 'red';
          
            document.getElementById('water-fill').style.height = data.waterLevel + "%";
            document.getElementById('water-level').textContent = data.waterLevel + "%";
        }

        function getGreenhouseData(name) {
            
            const greenhouseData = {
                "ESTUFA 1": { temperature: 31, humidity: 80, lightLevel: "BOA", waterLevel: 40 },
                "ESTUFA 2": { temperature: 29, humidity: 70, lightLevel: "MÉDIA", waterLevel: 60 },
                "ESTUFA 3": { temperature: 28, humidity: 65, lightLevel: "RUIM", waterLevel: 30 },
                "ESTUFA 4": { temperature: 33, humidity: 85, lightLevel: "MÉDIA", waterLevel: 50 },
                "ESTUFA 5": { temperature: 30, humidity: 75, lightLevel: "BOA", waterLevel: 45 },
                "CARRGAR MAIS":{}
            };
            return greenhouseData[name];
        }