
<?php
    $bilgiler = file_get_contents("kartvizit.txt");

    $bilgiler = explode("\n", $bilgiler);

    echo '<table border="1" style="width: 500px; margin:0 auto">
    <tr>
        <td align="center">
            <img src="dosyalar/'.$bilgiler[0].'" height="150px" alt="">
        </td>
        <td>';
        foreach ($bilgiler as $key => $bilgi){
            if($key != 0)
                echo $bilgi.'<br>';
        }
        echo '</td>
    </tr>
</table>';



?>























