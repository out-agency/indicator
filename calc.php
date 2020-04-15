<html>
<head>
    <title>Контроль качества продаж</title>

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta name="google-site-verification" content="0KUmjaN1vYhTfFFu_LGo6xnGZ3sbMkdre2YX9fsLv-Q"/>
    <link href="https://fonts.googleapis.com/css?family=Ubuntu:400,700" rel="stylesheet">

    <link rel="stylesheet" href="/css/bootstrap.min.css">
    <link rel="stylesheet" href="/css/linksales.css">

    <script src="/css/likely.js"></script>
    <link rel="stylesheet" href="/css/likely.css">
    <link rel="stylesheet" href="/css/calc.css">
    <meta property="og:image" content="facebook.jpg" />
    <meta name="yandex-verification" content="63d376e989b96e4d" />
    <link rel="stylesheet" href="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css" integrity="sha384-ggOyR0iXCbMQv3Xipma34MD+dH/1fQ784/j6cY/iJTQUOhcWr7x9JvoRxT2MZw1T" crossorigin="anonymous">
    <link type="image/png" href="/factory.png" rel="icon">
</head>
<body>
<div class="container">
<div class="menu">
    <img width="22" height="16" src="factory.png" alt="Лаборатория индикатор">  Лаборатория Индикатор
</div>
<br><br><br>

<div class="title">
    Калькулятор пользы
</div>
<br>

<form class="b-calc-condition">
    <div class="shadow pt-3 mb-5 bg-white rounded row">
        <div class="col-sm-6">
            <div class="form-group row">
                <label for="seller-count" class="col-sm-6 col-form-label">Кол-во продавцов</label>
                <div class="col-sm-4"><input type="number" value="12" class="form-control form-control-lg" id="seller-count"></div>
            </div>
            <div class="form-group row">
                <label for="seller-minute-count" class="col-sm-6 col-form-label">Трафик на продавца</label>
                <div class="col-sm-4"><input type="number" value="20" class="form-control form-control-lg" id="seller-minute-count"></div>
            </div>
            <div class="form-group row">
                <label class="col-sm-6 col-form-label">Трафик отдела</label>
                <div class="col-sm-4 seller-result" id="seller-result"></div>
            </div>
        </div>
        <div class="col-sm-6">
            <div class="form-group row">
                <label for="analytics-count" class="col-sm-6 col-form-label">Кол-во аналитик</label>
                <div class="col-sm-4"><input type="number" value="4" class="form-control form-control-lg" id="analytics-count"></div>
            </div>
            <div class="form-group row">
                <label for="seller-minute-count" class="col-sm-6 col-form-label">Кол-во тренингов</label>
                <div class="col-sm-4"><input type="number" value="2" class="form-control form-control-lg" id="trening-count"></div>
            </div>
            <div class="form-group row">
                <label for="seller-minute-count" class="col-sm-6 col-form-label">Кол-во критериев</label>
                <div class="col-sm-4"><input type="number" value="10" class="form-control form-control-lg" id="criteria-count"></div>
            </div>
        </div>
    </div>

</form>

<table class="b-calc-summary table table-hover table-sm">
  <thead class="thead-dark">
    <tr>
      <th scope="col">#</th>
      <th scope="col">AB</th>
      <th scope="col">ABI</th>
      <th scope="col">ABIP</th>
    </tr>
  </thead>
  <tbody>
    <tr>
      <th scope="row" class="action">Оценка звонков</th>
      <td>+</td>
      <td>+</td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row" class="action">Alerts</th>
      <td>+</td>
      <td>+</td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row" class="action">Best Practice</th>
      <td>+</td>
      <td>+</td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row" class="action">Insights</th>
      <td></td>
      <td>+</td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row" class="action">Perfomance</th>
      <td></td>
      <td></td>
      <td>+</td>
    </tr>
    <tr>
      <th scope="row" colspan="4"></th>
    </tr>
    <tr class="table-primary">
      <th scope="row" class="action">Стоимость</th>
      <td id="tarif-ab"></td>
      <td id="tarif-abi"></td>
      <td id="tarif-abip"></td>
    </tr>
  </tbody>
</table>



<br><br><br>
<div class="menu">
    <hr color="#aaaaaa" size="1px">
    <a href="mailto:hello@indicator-lab.ru">hello@indicator-lab.ru</a>
</div>
</div>
<script src="https://code.jquery.com/jquery-3.3.1.slim.min.js" integrity="sha384-q8i/X+965DzO0rT7abK41JStQIAqVgRVzpbzo5smXKp4YfRvH+8abtTE1Pi6jizo" crossorigin="anonymous"></script>
<script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js" integrity="sha384-UO2eT0CpHqdSJQ6hJty5KVphtPhzWj9WO1clHTMGa3JDZwrnQq4sF86dIHNDz0W1" crossorigin="anonymous"></script>
<script src="https://stackpath.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js" integrity="sha384-JjSmVgyd0p3pXB1rRibZUAYoIIy6OrQ6VrjIEaFf/nJGzIxFDsf4x0xIM+B07jRM" crossorigin="anonymous"></script>
<script type="text/javascript">
function calculateAB(departmentMinuteCount, workDays, asessor, teamlead, inhouseWorkMultiplicator, outdoorWorkMultiplicator){
  //console.log(departmentMinuteCount * workDays * asessor);
  return (departmentMinuteCount * workDays * asessor + teamlead) * inhouseWorkMultiplicator;
}

function calculateABI(departmentMinuteCount, workDays, asessor, teamlead, analytic, analyticsCount, inhouseWorkMultiplicator, outdoorWorkMultiplicator){
  //console.log(departmentMinuteCount * workDays * asessor);
  return (departmentMinuteCount * workDays * asessor + teamlead + analytic * analyticsCount) * inhouseWorkMultiplicator;
}

function calculateABIP(departmentMinuteCount, workDays, asessor, teamlead, analytic, analyticsCount, coach, treningCount, inhouseWorkMultiplicator, outdoorWorkMultiplicator){
  //console.log(departmentMinuteCount * workDays * asessor);
    var indoorSum = (departmentMinuteCount * workDays * asessor + teamlead + analytic * analyticsCount) * inhouseWorkMultiplicator;
    var outdoorSum = (coach * treningCount) * outdoorWorkMultiplicator;
	return indoorSum + outdoorSum;
}

$(document).ready(function(){
    var asessor = 2.5;
    var teamlead = 1300;
    var analytic = 1500;
    var coach    = 5000;
    var workDays = 21;

    var inhouseWorkMultiplicator = 3;
    var outdoorWorkMultiplicator = 2;
    
    $('#seller-count, #seller-minute-count')
        .change(function(){
            var departmentMinuteCount = $('#seller-count').val() * $('#seller-minute-count').val();
            $('#seller-result').text( departmentMinuteCount+' мин.' );
        });

    $('#seller-count, #seller-minute-count, #analytics-count, #trening-count, #criteria-count')
        .change(function(){
            var departmentMinuteCount = $('#seller-count').val() * $('#seller-minute-count').val();
            var analyticsCount = $('#analytics-count').val();
            var treningCount   = $('#trening-count').val();
            var tarifABsum     = calculateAB(departmentMinuteCount, workDays, asessor, teamlead, inhouseWorkMultiplicator, outdoorWorkMultiplicator);
            var tarifABIsum    = calculateABI(departmentMinuteCount, workDays, asessor, teamlead, analytic, analyticsCount, inhouseWorkMultiplicator, outdoorWorkMultiplicator);
            var tarifABIPsum   = calculateABIP(departmentMinuteCount, workDays, asessor, teamlead, analytic, analyticsCount, coach, treningCount, inhouseWorkMultiplicator, outdoorWorkMultiplicator);
            $('#tarif-ab').text( tarifABsum+' руб.' );
            $('#tarif-abi').text( tarifABIsum+' руб.' );
            $('#tarif-abip').text( tarifABIPsum+' руб.' );
        });

    $('#seller-count').change();
});
</script>
<!-- Yandex.Metrika counter --> <script type="text/javascript" > (function (d, w, c) { (w[c] = w[c] || []).push(function() { try { w.yaCounter45877893 = new Ya.Metrika({ id:45877893, clickmap:true, trackLinks:true, accurateTrackBounce:true, webvisor:true, trackHash:true }); } catch(e) { } }); var n = d.getElementsByTagName("script")[0], s = d.createElement("script"), f = function () { n.parentNode.insertBefore(s, n); }; s.type = "text/javascript"; s.async = true; s.src = "https://mc.yandex.ru/metrika/watch.js"; if (w.opera == "[object Opera]") { d.addEventListener("DOMContentLoaded", f, false); } else { f(); } })(document, window, "yandex_metrika_callbacks"); </script> <noscript><div><img src="https://mc.yandex.ru/watch/45877893" style="position:absolute; left:-9999px;" alt="" /></div></noscript> <!-- /Yandex.Metrika counter -->
</html>