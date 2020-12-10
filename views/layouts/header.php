<!DOCTYPE HTML>
<html>
 <head>
  <meta charset="utf-8">
  <title>Отдел кадров</title>

<link rel="shortcut icon" href="../../template/images/favicon.ico" />
<link rel="stylesheet" type="text/css" href="../../template/css/bootstrap.css">
<script src="../../template/js/bootstrap.js"></script>

 </head>
 <body>

<nav class="navbar navbar-expand-lg navbar-light bg-light">
  <a class="navbar-brand" href="/">Отдел кадров</a>
  <button class="navbar-toggler" type="button" data-toggle="collapse" data-target="#navbarSupportedContent" aria-controls="navbarSupportedContent" aria-expanded="false" aria-label="Toggle navigation">
    <span class="navbar-toggler-icon"></span>
  </button>

  <div class="collapse navbar-collapse" id="navbarSupportedContent">
    <ul class="navbar-nav mr-auto">
      <li class="nav-item active">
        <a class="nav-link" href="/">Главная <span class="sr-only">(current)</span></a>
      </li>
      <li class="nav-item">
        <a class="nav-link" href="/raspisanie">Штатное расписание</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/orgchart">Штатная структура</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/rabotniki">Работники</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/knigka">Трудовые книжки</a>
      </li>
	  <li class="nav-item">
        <a class="nav-link" href="/stag">Расчет трудового стажа</a>
      </li>
    </ul>
    <form class="form-inline my-2 my-lg-0" action = "/search" method = "post">
      <input class="form-control mr-sm-2" type="search" placeholder="Search" aria-label="Search" name="pattern">
      <button class="btn btn-outline-success my-2 my-sm-0" type="submit">Поиск</button>
    </form>
  </div>
</nav>