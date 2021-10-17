<!DOCTYPE html>
<html lang="en">
    <head>
        <meta charset="UTF-8">
        <meta name="author" content="Budi Santoso 2072026">
        <title>Soal 02</title>
    </head>
    <body>
        <form action="soal2.php" method="GET">
            <table border="1" align="center" cellspacing="0">
                <tr align="center" bgcolor="#eb4d4b">
                    <td>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; <b>Kalkulator</b>&nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; </td>
                </tr>
            </table>

            <table border="2" align="center" cellspacing="0">
                <tr>
                    <td bgcolor="#ff7979">Angka pertama : </td>
                    <td bgcolor="#ff7979"><input name="angka1" type="angka1" size="10"> </td>
                </tr>

                <tr>
                    <td bgcolor="#ff7979">Angka kedua : </td>
                    <td bgcolor="#ff7979"><input name="angka2" type="angka2" size="10"> </td>
                </tr>

                <tr>
                    <td bgcolor="#ff7979">Operator : </td>
                    <td bgcolor="#ff7979"><input name="opt" type="opt" size="10"> </td>
                </tr>
            </table>

            <table border="2" align="center" cellspacing="0">
                <tr align="center" bgcolor="#eb4d4b">
                    <td align="right">&nbsp; &nbsp; &nbsp; &nbsp; &nbsp;&nbsp; &nbsp;<input name="hasil" type="submit" value="Submit"></td>
                    <td align="left"><input type="reset" value="Reset"> &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp; &nbsp;</td>
                </tr>
            </table>
        </form>
    </body>
</html>