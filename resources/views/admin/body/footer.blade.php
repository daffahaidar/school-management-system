<?php
$label = ['Januari', 'Februari', 'Maret', 'April', 'Mei', 'Juni', 'Juli', 'Agustus', 'September', 'Oktober', 'November', 'Desember'];
$month = $label[date('n') - 1];
$year = date('Y');
$date = date('d');
?>

<footer class="main-footer">
    <div class="pull-right d-none d-sm-inline-block">

        <!-- <ul class="nav nav-primary nav-dotted nav-dot-separated justify-content-center justify-content-md-end">
            <li class="nav-item">
                <a class="nav-link" href="javascript:void(0)">FAQ</a>
            </li>
            <li class="nav-item">
                <a class="nav-link" href="#">www.yourbrand.com</a>
            </li>
        </ul> -->
        <!-- print date - month - year in p -->
        <p>{{ $date . ' ' . $month . ' ' . $year }} </p>
    </div>
    <div>&copy; 2020 - {{ $year }}<a href="#"> My School</a> | All Rights Reserved.</div>

</footer>
