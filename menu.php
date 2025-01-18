<?php

// Menu para la transformacion de Hora-Minuto-Segundo

$time=1;
$time_r=3;

do{
    system("clear || cls");
    echo "¿Desea transformar la Hora(s) H/h, el Minuto(s) M/m o el Segundo(s) S/s? para SALIR presiona E/e ";

    $menu=readline();
    if($menu==="E" || $menu==="e"){
        system("clear || cls");
        echo "Buen día\n";
        sleep($time);
        system("clear || cls");
        break;
    }else if($menu==="H" || $menu==="h"){
        system("clear || cls");
        echo "Ingrese el número de horas: ";
        $horas=(float) readline();
        echo "¿Desea transformar a Minuto(s) M/m o Segundo(s) S/s? para SALIR presiona E/e ";
        $mensaje=readline();
        if($mensaje==="E" || $mensaje==="e"){
        system("clear || cls");
        echo "Buen día\n";
        sleep($time);
        system("clear || cls");
        break;
        }else if($mensaje==="M" || $mensaje==="m"){
            $minutos = $horas * 60;
            echo "$horas hora(s) es equivalente a $minutos minuto(s)\n";
            sleep($time_r);
        }else if($mensaje==="S" || $mensaje==="s"){
            $segundos = $horas * 3600;
            echo "$horas hora(s) es equivalente a $segundos segundo(s)\n";
            sleep($time_r);
        }else{
            system("clear || cls");
            echo "Ingreso una letra equivocada, Nuevamente al menú\n";
            sleep ($time);
            system("clear || cls");
        } 
    }else if ($menu==="M" || $menu==="m") {
        system("clear || cls");
        echo "Ingrese el número de minutos: ";
        $minutos=(float) readline();
        echo "¿Desea transformar a Horas(s) H/h o Segundo(s) S/s? para SALIR presiona E/e ";
        $mensaje=readline();
        if($mensaje==="E" || $mensaje==="e"){
        system("clear || cls");
        echo "Buen día\n";
        sleep($time);
        system("clear || cls");
        break;
        }else if($mensaje==="H" || $mensaje==="h"){
            $horas = $minutos/60;
            echo "$minutos minuto(s) es equivalente a $horas hora(s)\n";
            sleep($time_r);
        }else if($mensaje==="S" || $mensaje==="s"){
            $segundos = $segundos/3600;
            echo "$minutos minuto(s) es equivalente a $segundos segundo(s)\n";
            sleep($time_r);
        }else{
            system("clear || cls");
            echo "Ingreso una letra equivocada, Nuevamente al menú\n";
            sleep ($time);
            system("clear || cls");
        }
        
    }else if ($menu==="S" || $menu==="s") {
        system("clear || cls");
        echo "Ingrese el número de segundos: ";
        $segundos=(float) readline();
        echo "¿Desea transformar a Minuto(s) M/m o Horas(s) H/h? para SALIR presiona E/e ";
        $mensaje=readline();
        if($mensaje==="E" || $mensaje==="e"){
        system("clear || cls");
        echo "Buen día\n";
        sleep($time);
        system("clear || cls");
        break;
        }else if($mensaje==="M" || $mensaje==="m"){
            $minutos = $segundos/60;
            echo "$segundos segundo(s) es equivalente a $minutos minuto(s)\n";
            sleep($time_r);
        }else if($mensaje==="H" || $mensaje==="h"){
            $horas= $segundos/3600;
            echo "$segundos segundo(s) es equivalente a $horas horas(s)\n";
            sleep($time_r);
        }else{
            system("clear || cls");
            echo "Ingreso una letra equivocada, Nuevamente al menú\n";
            sleep ($time);
            system("clear || cls");
        } 
    }else{
        system("clear || cls");
        echo "Ingreso una letra equivocada, Nuevamente al menú\n";
        sleep ($time);
        system("clear || cls");
    }
    
} while (true);
