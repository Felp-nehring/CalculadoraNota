
<body style="text-align:center;">  
<form method="post">
        <input type="submit" name="bimestre1"
        class="btn btn-light ms-2" value="1º Bimestre" />
          
        <input type="submit" name="bimestre2"
        class="btn btn-light ms-2" value="2º Bimestre" />

        <input type="submit" name="bimestre3"
        class="btn btn-light ms-2" value="3º Bimestre" />

        <input type="submit" name="bimestre4"
        class="btn btn-light ms-2" value="4º Bimestre" />

        <input type="submit" name="bimestretotal"
        class="btn btn-light ms-4" value="Todos os Bimestres" />
    </form>
    <hr> 
    <?php
        if(array_key_exists('bimestre1', $_POST)) {
          bimestre1();
        }
        else if(array_key_exists('bimestre2', $_POST)) {
          bimestre2();
        }
        else if(array_key_exists('bimestre3', $_POST)) {
          bimestre3();
        }
          else if(array_key_exists('bimestre4', $_POST)) {
            bimestre4();
          }
            else if(array_key_exists('bimestretotal', $_POST)) {
              bimestretotal();
      }
        function bimestre1() {
            echo '
            <form>
            <div class="row">
            <div class="col">
      
            <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col bg-light"> </th>
                  <th scope="col">1º Bimestre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <th scope="row">Matemática</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Português</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">História</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Geografia</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Filosofia</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Sociologia</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Literatura</th> 
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Lingua Inglesa</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Biologia</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Química</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Física</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" ></th>
                </tr>
                <tr>
                <th scope="row">Artes</th>
                <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" "></th>
                </tr>
               
              </tbody>
            </table>
            <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
      <h1> Dados relacionados a nota </h1>
    </div>
            

            <hr class="mt-2">
            ';
        }
        function bimestre2() {
            echo '
            <form>
            <div class="row">
            <div class="col">
            <table class="table table-dark table-hover">
            <thead>
                <tr>
                  <th scope="col bg-light"> </th>
                  <th scope="col">2º Bimestre</th>
                </tr>
              </thead>
              <tbody>
                <tr>
                <th scope="row">Matemática</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Português</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">História</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Geografia</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Filosofia</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Sociologia</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Literatura</th> 
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Lingua Inglesa</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Biologia</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Química</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Física</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
                <tr>
                <th scope="row">Artes</th>
                <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
                </tr>
               
              </tbody>
            </table>
            <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
      <h1> Dados relacionados a nota </h1>
    </div>
            <hr>
            ';
        
        }
        function bimestre3() {
          echo '
          <div class="row">
            <div class="col">
          <form>
          <table class="table table-dark table-hover">
          <thead>
              <tr>
                <th scope="col bg-light"> </th>
                <th scope="col">3º Bimestre</th>
              </tr>
            </thead>
            <tbody>
              <tr>
              <th scope="row">Matemática</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Português</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">História</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Geografia</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Filosofia</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Sociologia</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Literatura</th> 
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Lingua Inglesa</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Biologia</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Química</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Física</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
              <tr>
              <th scope="row">Artes</th>
              <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
              </tr>
             
            </tbody>
          </table>
          <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
      <h1> Dados relacionados a nota </h1>
    </div>

          <hr>
          ';
      }
      function bimestre4() {
        echo '
        <div class="row">
            <div class="col">
        <form>
        <table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col bg-light"> </th>
              <th scope="col">4º Bimestre</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <th scope="row">Matemática</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Português</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">História</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Geografia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Filosofia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Sociologia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Literatura</th> 
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Lingua Inglesa</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Biologia</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Química</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Física</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Artes</th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
           
          </tbody>
        </table>
        <button type="submit" class="btn btn-light"> Enviar dados </button>
            </form>
            </div>
            <div class="col">
      <h1> Dados relacionados a nota </h1>
    </div>

        <hr>
        ';
    }
      function bimestretotal(){
        echo '<table class="table table-dark table-hover">
        <thead>
            <tr>
              <th scope="col bg-light"> </th>
              <th scope="col">1º Bimestre</th>
              <th scope="col">2º Bimestre</th>
              <th scope="col">3º Bimestre</th>
              <th scope="col">4º Bimestre</th>
            </tr>
          </thead>
          <tbody>
            <tr>
            <th scope="row">Matemática</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            
            </tr>
            <tr>
            <th scope="row">Português</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">História</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Geografia</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Filosofia</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Sociologia</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Literatura</th> 
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Lingua Inglesa</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Biologia</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Química</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Física</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
            <tr>
            <th scope="row">Artes</th>
            <th scope="row"><input type="number" name="b1" id="" min="0" max="10" step=".5" class="ms-2"></th>
            <th scope="row"><input type="number" name="b2" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b3" id="" min="0" max="10" step=".5"></th>
            <th scope="row"><input type="number" name="b4" id="" min="0" max="10" step=".5"></th>
            </tr>
           
          </tbody>
        </table>
        <hr>
        ';
    
      }
    ?>
  

