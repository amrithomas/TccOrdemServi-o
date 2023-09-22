<!DOCTYPE html>
<html lang="en">
  <head>  
    <meta charset="UTF-8" />
    <meta name="viewport" content="width=device-width, initial-scale=1.0" />
    <link
      rel="stylesheet"
      href="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/css/bootstrap.min.css"
    />

    <script src="https://code.jquery.com/jquery-3.5.1.slim.min.js"></script>
    <script src="https://cdn.jsdelivr.net/npm/@popperjs/core@2.9.1/dist/umd/popper.min.js"></script>
    <script src="../js/lista_chamado/script_descricao.js"></script>
    <script src="https://stackpath.bootstrapcdn.com/bootstrap/4.5.2/js/bootstrap.min.js"></script>
    <link rel="stylesheet" href="../styles/lista_chamado/styleModal.css" />
    <script src="././../js/lista_chamado/script_botao.js"></script>
    <title>Listagem de Chamados</title>
  </head>
  <body>
    <div class="container">
      <h1>Bootstrap Modal Example</h1>
      <button 
        type="button"
        class="btn btn-primary"
        data-toggle="modal"
        data-target="#myModal"
      > 
        Open Modal
      </button>



      <!-- Modal -->
      <div
        class="modal fade"
        id="myModal"
        tabindex="-1"
        role="dialog"
        aria-labelledby="exampleModalLabel"
        aria-hidden="true"
      >
        <div class="modal-dialog modal-lg" role="document">
          <div class="modal-content modal-lg">
            <div class="header">
              <p id="Titulo">CHAMADOS</p>
              <div class="fechar">
                <button
                  type="button"
                  class="close"
                  data-dismiss="modal"
                  aria-label="Close"
                >
                  <span aria-hidden="true" id="x">&times;</span>
                </button>
              </div>
            </div>

            <div class="perfil">
              <div>
                <img id="pessoa" style="padding-bottom: 7px;" src="../../assets/images/lista_chamado/pessoa.png" alt="" /><span id="nome"
                  >NOME</span
                >
              </div>
            </div>

            <div class="modal-body modalBody">
              <table class="table table-bordered responsive-table">
                <thead>
                  <tr>
                    <th id="contador"                
                      
                      colspan="3"
                      style="text-align: center; background-color: #8cb2b0"
                    >
                      X Chamados Abertos
                    </th>
                  </tr>
                  <tr>
                    <th
                      colspan="3"
                      scope="col" 
                      style="background-color: #dde6db"
                    >
                      <div id="categoria" scope="col" style="justify-content: space-evenly; display: flex">
                        <img
                          id="lista"
                          src="../../assets/images/lista_chamado/fechado.png"
                          onclick="pendente()" 
                          alt=""
                        >
                        <img
                          id="aguardando"
                          src="../../assets/images/lista_chamado/aguardando.png"
                          onclick="andamento()"
                          alt=""
                        >
                        <img
                          id="concluido"
                          src="../../assets/images/lista_chamado/concluido.png"
                          onclick="finalizado()"
                          alt=""
                        >
                      </div>
                    </th>
                  </tr>
                </thead>
                <tbody>

                  <!-- chamados abertos -->
                  <!-- linha 1 -->
                  <tr id="listaPadrao" class="abertos" id="abertos1" onclick="substituirLayout()">
                    <td>
                      <p>Título do chamado:  <span id="titulo_chamado">aaaa</span></p> 
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                       <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 2 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                       <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 3 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 4 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 4 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 5 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 6 -->
                  <tr id="listaPadrao" class="abertos" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86cefb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- chamados aguardando -->
                  <!-- linha 1 -->
                  <tr id="aguardandoLista" class="aguardando invisivel">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #c286fb;"></div>
                      
                       <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 2  -->
                  <tr id="aguardandoLista" class="aguardando invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #c286fb;"></div>
                    
                        <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 3 -->
                  <tr id="aguardandoLista" class="aguardando invisivel" colspan="3">
                    <td>
                      <p>Título do chamado: </p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #c286fb;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- chamados Concluído -->
                  <!-- linha 1 -->
                  <tr id="concluidoLista" class="fechados invisivel">
                    <td>
                      <p>Título do chamado: </p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                        <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 2 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado: </p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                        <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 3 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 4 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 5 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 6 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 7 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                  <!-- linha 8 -->
                  <tr id="concluidoLista" class="fechados invisivel" colspan="3">
                    <td>
                      <p>Título do chamado:</p>
                      <p id="urgencia">Urgência</p>
                      <div class="nivel" style="background-color: #86fba3;"></div>

                      <!-- segunda coluna -->
                      <td id="seg_col">
                        <p id="status">Status:</p>
                        <p>Data:</p>
                      </td>
                    </td>
                  </tr>

                </tbody>
              </table>
            </div>
          </div>
        </div>
      </div>
    </div>
  </body>
</html>

</body>
</html>