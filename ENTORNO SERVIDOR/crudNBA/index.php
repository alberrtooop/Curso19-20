<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="./Estilos/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div class="Bloque">
            <div class="bloqueInsert">
                <h1>Insertar Equipo</h1>
                <form action="phpEquipo/insertarDB.php" method="POST">
                    <label>Nombre</label><br/>
                    <input type="text" name="Nombre"/><br/>
                    <label>Ciudad</label> <br/>
                    <input type="text" name="Ciudad"/><br/>
                    <label>Conferencia</label><br/>
                    <select name="Conferencia">
                        <option value="East">East</option>
                        <option value="West">West</option>
                    </select><br/>
                    <label>Division</label><br/>
                    <input type="text" name="Division"/> <br/>
                    <br/>
                    <input type="submit" value="A&Ntilde;ADIR"/>
                </form>
            </div>
            <div class="bloqueButton">
                <h1>Lista de Equipos</h1>
                <button><a id="ClaseA" href="phpEquipo/listaequipos.php">Lista Equipo</a></button>
            </div>
        </div>
         <div class="Bloque">
            <div class="bloqueInsert">
                <h1>Insertar Equipo</h1>
                <form action="phpEquipo/insertarDB.php" method="POST">
                    <label>Nombre</label><br/>
                    <input type="text" name="Nombre"/><br/>
                    <label>Ciudad</label> <br/>
                    <input type="text" name="Ciudad"/><br/>
                    <label>Conferencia</label><br/>
                    <select name="Conferencia">
                        <option value="East">East</option>
                        <option value="West">West</option>
                    </select><br/>
                    <label>Division</label><br/>
                    <input type="text" name="Division"/> <br/>
                    <br/>
                    <input type="submit" value="A&Ntilde;ADIR"/>
                </form>
            </div>
            <div class="bloqueButton">
                <h1>Lista de Equipos</h1>
                <button><a id="ClaseA" href="phpEquipo/listaequipos.php">Lista Equipo</a></button>
            </div>
        </div>
    </body>
</html>