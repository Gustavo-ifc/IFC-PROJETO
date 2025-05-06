<!DOCTYPE html>
<html lang="pt-BR">
<head>
<meta charset="UTF-8">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<link rel="stylesheet" href="css/style.css">
<title>Controle de Estufas</title>
</head>
<body>

    <div class="container">
        
      
        <img class="imagem " src="img/images.jpg" alt="">
        
      
        <div class="content">
        
            <div class="sidebar">
                <div class="status status-green" onclick="selectGreenhouse('ESTUFA 1', this)">
                    <div class="indicator"></div>
                    <span>ESTUFA 1</span>
                </div>
                <div class="status status-red" onclick="selectGreenhouse('ESTUFA 2', this)">
                    <div class="indicator"></div>
                    <span>ESTUFA 2</span>
                </div>
                <div class="status status-green" onclick="selectGreenhouse('ESTUFA 3', this)">
                    <div class="indicator"></div>
                    <span>ESTUFA 3</span>
                </div>
                <div class="status status-red" onclick="selectGreenhouse('ESTUFA 4', this)">
                    <div class="indicator"></div>
                    <span>ESTUFA 4</span>
                </div>
                <div class="status status-green" onclick="selectGreenhouse('ESTUFA 5', this)">
                    <div class="indicator"></div>
                    <span>ESTUFA 5</span>
                </div>
                <div class="status">
                    <div class="indicator"></div>
                    <span>CARREGAR MAIS</span>
                </div>
                
            </div>
            
            <div class="main">
                <h2>TEMPERATURA</h2>
                <p class="metric" id="temperature">31°C</p>
                <h2>UMIDADE</h2>
                <p class="metric" id="humidity">80%</p>
                <h2>NÍVEL DE LUZ</h2>
                <p class="light-level" id="light-level">BOA</p>
                
              
                <div class="water-level">
                    <span>NÍVEL DE ÁGUA</span>
                    <div class="water-bar">
                        <div class="water-fill" id="water-fill" style="height: 40%;"></div>
                    </div>
                    <span id="water-level">40%</span>
                </div>
            </div>
        </div>
    </div>


    <script src="js/pagprincipal.js"></script>
</body>
</html>
