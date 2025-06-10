<DOCTYPE html>
  <meta http-equiv="Content-Type" content="text/html;charset=UTF-8">
  <head>
    <title>Página do Vigilante</title>
    <style>
      :root {
        --primary-color: #4CAF50;
        --primary-hover: #45a049;

        --text-color: #333;
        --border-color: #ddd;
        --accent-color: #005522;
        --error-color: #ff4444;
        --background-color: #f8f9fa;
        --gradient-primary: linear-gradient(135deg, #4CAF50 0%, #45a049 100%);
        --gradient-accent: linear-gradient(135deg, #4CAF50 0%, #FFA500 100%);
        }
      header {
        position: fixed;
        top: 0;
        left: 0;
        right: 0;
        background: var(--accent-color);
        height: 60px;
        display: flex;
        justify-content: space-between;
        align-items: center;
        padding: 0 20px;
        box-shadow: 0 2px 10px rgba(0, 0, 0, 0.1);
        z-index: 1000;
      }
      .header-title {
        color: white;
        font-size: 1.2rem;
        font-weight: 600;
      }
      #menu-btn img {
        width: 31px;
        height: 31px;
      }
      .ped-entrada {
        padding: 6px;
        border: solid 1px;
        border-radius: 15px;
        background-color: #EFF0FF;
        margin-bottom: 5px;
        width: 100%;
        margin-right: 200px;
      }
      #menu-btn {
      background: none;
      color: white;
      border: none;
      padding: 10px 15px;
      cursor: pointer;
    }

    .button-container {
      display: flex;
      gap: 20px;
    }

    button {
      margin-top: 20px;
      padding: 15px 30px;
      font-size: 16px;
      border: 2px solid #333;
      border-radius: 30px;
      background-color: transparent;
      color: #333;
      cursor: pointer;
      transition: all 0.3s ease;
    }

    .aceitados:hover,
    .aceitados:active {
      background-color: #4CAF50;
      color: white;
      border-color: #4CAF50;
    }

    .recusados:hover,
    .recusados:active {
      background-color: #f44336;
      color: white;
      border-color: #f44336;
    }
      h3 {
        color: white;
      }
    .sidebar {
      height: 100%;
      width: 0;
      position: fixed;
      top: 0;
      left: 0;
      background-color:#FF7900;
      overflow-x: hidden;
      transition: 0.3s;
      padding-top: 65px;
    }

    .sidebar a {
      padding: 10px 20px;
      text-decoration: none;
      font-size: 18px;
      color: white;
      display: block;
      transition: 0.2s;
    }

    .sidebar a:hover {
      background-color: #575757;
    }
      a {
        color: var(--primary-color);
        text-decoration: none;
        font-size: 0.9rem;
        font-weight: 500;
        transition: color 0.3s ease;
      }

      .link:hover {
        color: var(--primary-hover);
        
      }
      
     #aceitar{
       padding: 8px;
       width: 100px;
       border-radius:15px;
       background-color: rgba(152, 255, 59, 1);
       transition: 0.25rem;
       margin-top: 10px;
     }
     #recusar{
       padding: 8px;
       width: 100px;
       border-radius:15px;
       background-color: rgba(255, 94, 59, 1);
       transition: 0.25rem;
       margin-top: 10px;
     }
      footer {
        position: fixed;
        bottom: 0;
        left: 0;
        right: 0;
        text-align: center;
        padding: 1rem;
        color: var(--text-color);
        font-size: 0.9rem;
        background: white;
        border-top: 1px solid rgba(0, 0, 0, 0.1);
        z-index: 1000;
      }
      footer::before {
        content: '';
        position: absolute;
        top: 0;
        left: 50%;
        transform: translateX(-50%);
        width: 100px;
        height: 2px;
        background: var(--gradient-accent);
      }
      body {
        font-family: 'Poppins', sans-serif;
        background: var(--background-color);
        min-height: 100vh;
        display: flex;
        flex-direction: column;
        justify-content: center;
        align-items: center;
        padding: 20px;
        position: relative;
        padding-bottom: 60px;
        padding-top: 70px;
        margin: 0;
        padding: 0;
      }
      h1 {
        text-align: center;
      }
      #searchInput {
        padding: 17px;
        font-size: 1rem;
        border-radius: 16px;
        display: flex;
        flex-direction: center;
        width: 105%;
      }

    </style>
    
  </head>
  <body>

   <header>
    <button id="menu-btn">
      <img src="/Imagens/menu_icon.png"></button>
      
    <div class="header-title">Salaberga</div>
  
  
    <nav class="header-nav">
      <a href="../index.php" class="header-btn">
        <i class="fas fa-home"></i>
        <span>Sair</span>
      </a>
    </nav>
  
  </header>
    <div class="sidebar" id="sidebar">
        <h3> » Visualizar pedidos</h3>
        <a href="pedidos_entrada.php">Pedidos de Entrada</a>
        <a href="pedidos_saida.php">Pedidos de Saída</a>
        <a href="pedidos_saidaestagio.php">Pedidos de Saída Estágio</a>
      </div>
  </br>
  
  
<div class="conteudo">
    <h1>Sistema do Vigilante</h1>
    <br>
    
    <input type="text" id="searchInput" placeholder="Buscar por nome...">
    <ul id="alunoList">
      <?php
      
      ?>
    </ul>
  <div class="button-container">
    <button class="aceitados">Aceitados</button>
    <button class="recusados">Recusados</button>
  </div>
    </br></br>
    
  <div class="pedidos" data-status="pendente">
      <div class="ped-entrada">
        <h4>Pedido de Entrada</h4>
        <p id=aluno><strong>Aluno: </strong></p>
        <p><strong>Motivo:</strong></p>
        <p><strong>Data:</strong></p>
        <div id="botoes-pedido">
      <button onclick="verPedido{$pedido.id}, 'aceitados')" id="aceitar">Aceitar</button>
      <button onclick="verPedido{$pedido.id},  'recusados')" id="recusar">Recusar</button></div>
        </div>
  </div>
</div>


    <footer>© Salaberga 2025 - Todos os direitos reservados.</footer>
    
    
    <script>
  function verPedido(button, status) {
    const pedido = button.closest('.ped-entrada');
    pedido.setAttribute('data-status', status);
    
  const aceitadosBtn = document.querySelector('.aceitados');
  const recusadosBtn = document.querySelector('.recusados');

  aceitadosBtn.addEventListener('click', () => {
    filtrarPedidos('aceito');
  });

  recusadosBtn.addEventListener('click', () => {
    filtrarPedidos('recusado');
  });

  function filtrarPedidos(statusDesejado) {
    const pedidos = document.querySelectorAll('.ped-entrada');
    pedidos.forEach(pedido => {
      const status = pedido.getAttribute('data-status');
      pedido.style.display = status === statusDesejado ? 'block' : 'none';
    });
  }}
    const sidebar = document.getElementById('sidebar');
    const menuBtn = document.getElementById('menu-btn');

    function toggleSidebar() {
      sidebar.style.width = sidebar.style.width === '250px' ? '0' : '250px';
    }

    menuBtn.addEventListener('click', toggleSidebar);
    
    
    const searchInput = document.getElementById('searchInput');
    const list = document.getElementById('alunoList').getElementsByTagName('li');
    
    input.addEventListener('keyup', () => {
    const value = input.value.toLowerCase();
      for (let item of list) {
        item.style.display = item.textContent.toLowerCase().includes(value)?'':'none';
      }
    });
    </script>
  </body>
</html>