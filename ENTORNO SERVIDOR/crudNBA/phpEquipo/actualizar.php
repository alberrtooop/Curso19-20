<!DOCTYPE html>
<html>
    <head>
        <title></title>
        <link href="../Estilos/estilos.css" rel="stylesheet" type="text/css"/>
    </head>
    <body>
        <div id="centro">
            <div class="Izquierda">
                <h1>Insertar Equipo</h1>
                <form action="actualizarDB.php" method="POST">
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
                    <input type="submit" value="ACTUALIZAR"/>
                </form>
            </div>
        </div>
        
        <div id="centro">
            <div class="Izquierda">
                <h1>Insertar Equipo</h1>
                <form action="actualizarDB.php" method="POST">
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
                    <input type="submit" value="ACTUALIZAR"/>
                </form>
            </div>
        </div>
    </body>
</html>