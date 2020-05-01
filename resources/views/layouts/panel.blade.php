<!DOCTYPE html>

<html>
<head>
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <meta charset="UTF-8">
    <title>Desarrollo</title>
    <link rel="stylesheet" href="{{asset('css/anime.css')}}">
    <link rel="stylesheet" href="{{asset('css/style.css')}}">
    <link rel="icon" href="favicon.ico" type="image/x-icon"/>
    <style>
        .heart {
          background: #e74c3c;
          position: absolute;
          transform: rotate(-45deg);
      }

      .heart::before,
      .heart::after {
          position: absolute;
          content: "";
          width: 100%;
          height: 100%;
          background: #e74c3c;
          border-radius: 50%;
      }

      .heart::before {
          top: -50%;
          left: 0;
      }
      .heart::after {
          top: 0;
          right: -50%;
      }
  </style>
</head>
<script>
  window.console = window.console || function(t) {};
</script>
<script>
  if (document.location.search.match(/type=embed/gi)) {
    window.parent.postMessage("resize", "*");
}
</script>
<body>

    @yield('content')
    @include('includes.menu')

    <div class="user-profile__social__links">

        <a href="https://twitter.com/littlecory3" target="_blank" rel="noopener" class="user-profile__social__links__item">
            <svg class="user-profile__social-icon" viewBox="0 0 30 30">
                <path d="M12.254,22c-2.574,0-4.745-1.172-4.745-1.908c0-0.276,0.251-0.521,0.528-0.521c1.023,0,2.003-0.25,2.882-0.73
                c-0.951-0.444-2.103-1.336-2.906-2.625c-0.918-1.471-1.68-3.937-0.1-7.326c0.073-0.156,0.221-0.265,0.392-0.285
                c0.175-0.023,0.341,0.048,0.45,0.182c1.439,1.777,3.508,2.92,5.748,3.191c-0.003-0.064-0.005-0.131-0.005-0.196
                C14.497,9.696,16.182,8,18.255,8c0.961,0,1.892,0.375,2.586,1.036H22.5c0.169,0,0.328,0.086,0.419,0.229
                c0.092,0.142,0.106,0.321,0.037,0.476l-0.938,2.096c0.003,0.108,0.005,0.217,0.005,0.326C22.024,16.998,18.37,22,12.254,22z
                M9.417,20.437C10.069,20.723,11.027,21,12.254,21c5.49,0,8.77-4.493,8.77-8.838c0-0.136-0.003-0.27-0.009-0.403
                c-0.003-0.077,0.012-0.154,0.043-0.225l0.67-1.498h-1.096c-0.139,0-0.271-0.058-0.366-0.159C19.74,9.311,19.025,9,18.255,9
                c-1.521,0-2.758,1.248-2.758,2.781c0,0.219,0.024,0.432,0.071,0.634c0.036,0.153-0.002,0.314-0.103,0.435
                c-0.101,0.12-0.247,0.195-0.409,0.179c-2.481-0.125-4.822-1.208-6.539-3c-0.982,2.61-0.378,4.501,0.344,5.658
                c1.002,1.607,2.637,2.469,3.233,2.48c0.211,0.004,0.397,0.141,0.464,0.341c0.067,0.2,0.001,0.421-0.165,0.552
                C11.508,19.758,10.497,20.224,9.417,20.437z">
            </path>
        </svg>
    </a>

    <a href="https://instagram.com/littlecory3" target="_blank" rel="noopener" class="user-profile__social__links__item">

        <svg class="user-profile__social-icon" viewBox="0 0 30 30">
            <path d="M15,11c-2.206,0-4,1.794-4,4s1.794,4,4,4s4-1.794,4-4S17.206,11,15,11z M15,18c-1.654,0-3-1.346-3-3s1.346-3,3-3
            s3,1.346,3,3S16.654,18,15,18z"></path><path d="M19.271,10.174c-0.329,0-0.597,0.269-0.597,0.598s0.268,0.598,0.597,0.598s0.597-0.269,0.597-0.598
            S19.601,10.174,19.271,10.174z"></path><path d="M19.156,7.5h-8.312C9,7.5,7.5,9,7.5,10.844v8.312C7.5,21,9,22.5,10.844,22.5h8.312C21,22.5,22.5,21,22.5,19.156v-8.312
            C22.5,9,21,7.5,19.156,7.5z M21.5,19.156c0,1.292-1.052,2.344-2.344,2.344h-8.312c-1.292,0-2.344-1.052-2.344-2.344v-8.312
            C8.5,9.552,9.552,8.5,10.844,8.5h8.312c1.292,0,2.344,1.052,2.344,2.344V19.156z">

        </path>
    </svg>
</a>

<a href="https://tiktok.com/@littlecory3" target="_blank" rel="noopener" class="user-profile__social__links__item">
    <svg class="user-profile__social-icon" viewBox="0 0 30 30">
        <path d="M12.6 24C9.5 24 7 21.5 7 18.5S9.5 13 12.5 13h.4c.3 0 .5.2.5.5v2.7c0 .1-.1.3-.2.4s-.3.1-.4.1h-.3c-1 0-1.8.8-1.8 1.8s.8 1.8 1.8 1.8 1.8-.8 1.8-1.8v-11c0-.3.2-.5.5-.5h2.7c.3 0 .5.2.5.5 0 1.8 1.5 3.3 3.3 3.3.3 0 .5.2.5.5V14c0 .3-.2.5-.5.5-1.2 0-2.3-.3-3.3-.8v4.7c.1 3.1-2.4 5.6-5.4 5.6zm-.2-10.1C10 14 8 16 8 18.5 8 21 10 23 12.5 23s4.5-2 4.5-4.5v-5.6c0-.2.1-.4.3-.4.2-.1.4-.1.5 0 .9.7 2 1 3.1 1.1v-1.7c-2-.2-3.6-1.8-3.8-3.8h-1.8v10.5c0 1.6-1.3 2.8-2.8 2.8-1.6 0-2.8-1.3-2.8-2.8 0-1.5 1.2-2.7 2.7-2.8v-1.9z">

        </path>
    </svg>
</a>

<a href="https://www.amazon.com/hz/wishlist/dl/invite/e43nriJ?ref_=wl_share" target="_blank" rel="noopener" class="user-profile__social__links__item">
    <svg class="user-profile__social-icon" viewBox="0 0 32 30">
        <path d="M14.4 20h-.8c-.9-.1-1.8-.5-2.4-1.2-.6-.7-.9-1.6-.8-2.5 0-1.1.4-2.1 1.2-2.9 1.5-1.4 3.9-1.7 5-1.7 0-.4 0-.9-.3-1.2-.1-.1-.3-.2-.6-.2-.6 0-1.2.4-1.3 1-.1.4-.5.7-.9.6l-2-.3h-.1c-.4-.1-.7-.5-.6-1C11 9.8 11.9 7 16 7c1.6 0 2.8.4 3.6 1.3 1.1 1.2 1 2.8 1 2.9v4.4c.1.5.3 1.1.7 1.5.3.4.2.8-.1 1.1l-1.7 1.4c-.3.2-.7.2-1 0-.4-.3-.7-.6-1-1-.9.9-2 1.4-3.1 1.4zm-.4-1.1c1.2.1 2.4-.4 3.1-1.3.1-.1.3-.2.4-.2.2 0 .3.1.4.2.3.4.6.8 1 1.2l1.4-1.2c-.4-.6-.7-1.3-.8-2v-4.5c0-.1.1-1.3-.7-2.1-.6-.6-1.6-1-2.8-1-3.1 0-3.9 1.7-4.2 2.6l1.7.2c.3-.9 1.2-1.6 2.2-1.6.6 0 1 .2 1.4.5.6.6.6 1.6.6 2.1v.2c0 .1-.1.3-.2.4-.1.1-.3.1-.4.1 0 0-3.2-.1-4.8 1.4-.6.6-.9 1.3-.9 2.2-.1 1.4.9 2.6 2.3 2.7.1.1.2.1.3.1zm-2.2-8.1zm3.4 7.1c-.2 0-.7 0-1.1-.4-.4-.4-.6-.9-.6-1.6 0 0-.1-.9.6-1.6.6-.7 1.6-1 3-1 .3 0 .5.2.5.5v.9c0 1.1-.5 3.2-2.4 3.2.1 0 0 0 0 0zm1.4-3.6c-.8.1-1.4.3-1.8.7-.4.4-.3.9-.3.9 0 .3 0 .7.3.9.2.2.5.2.5.2 1.4 0 1.4-2.2 1.4-2.2v-.5zM15.7 24c-.4 0-.8 0-1.3-.1-3-.4-5.9-1.5-8.3-3.4-.1-.1-.2-.5 0-.7.2-.2.5-.3.7-.1 2.2 1.8 4.9 2.9 7.7 3.2 3 .3 6-.5 8.6-2.1.2-.1.5-.1.7.2.1.2.1.5-.2.7-2.3 1.5-5.1 2.3-7.9 2.3z">

        </path>
        <path d="M23.6 23.8c-.1 0-.2 0-.3-.1-.2-.2-.3-.5-.1-.7.9-1.3 1-2.1 1.1-2.5-.5-.1-1.7.2-2.5.5-.3.1-.5 0-.6-.3s0-.5.3-.6c.4-.1 2.4-.9 3.4-.4.3.1.4.4.5.6 0 .4 0 1.5-1.2 3.3-.3.1-.5.2-.6.2z">

        </path>
    </svg>
</a>

<a href="mailto:littlecory99@gmail.com" target="_blank" rel="noopener" class="user-profile__social__links__item">
    <svg class="user-profile__social-icon" viewBox="0 0 30 30">
        <path d="M22.485,20.074C22.489,20.049,22.5,20.026,22.5,20V10c0-0.024-0.01-0.044-0.013-0.066c-0.005-0.034-0.009-0.067-0.02-0.1
        c-0.012-0.033-0.03-0.061-0.048-0.091c-0.012-0.019-0.017-0.041-0.031-0.06c-0.005-0.007-0.013-0.009-0.019-0.015
        C22.343,9.64,22.314,9.621,22.285,9.6c-0.024-0.017-0.046-0.036-0.072-0.048c-0.028-0.013-0.059-0.019-0.09-0.027
        c-0.033-0.008-0.065-0.018-0.099-0.02C22.016,9.504,22.008,9.5,22,9.5H8c-0.008,0-0.016,0.004-0.024,0.005
        c-0.034,0.002-0.065,0.011-0.099,0.02c-0.031,0.008-0.062,0.013-0.09,0.027C7.761,9.564,7.739,9.583,7.715,9.6
        C7.686,9.621,7.657,9.64,7.632,9.667C7.627,9.673,7.619,9.676,7.613,9.683c-0.015,0.018-0.02,0.04-0.031,0.06
        C7.563,9.772,7.546,9.8,7.534,9.833c-0.012,0.033-0.016,0.066-0.02,0.1C7.51,9.956,7.5,9.976,7.5,10v10
        c0,0.026,0.011,0.049,0.015,0.074c0.005,0.035,0.008,0.07,0.021,0.103c0.014,0.036,0.036,0.065,0.057,0.097
        c0.013,0.02,0.019,0.042,0.035,0.06c0.003,0.003,0.007,0.004,0.01,0.007c0.04,0.042,0.088,0.075,0.14,0.101
        c0.009,0.004,0.015,0.012,0.024,0.016C7.863,20.485,7.929,20.5,8,20.5h14c0.071,0,0.137-0.015,0.198-0.042
        c0.009-0.004,0.015-0.012,0.024-0.016c0.052-0.026,0.1-0.059,0.14-0.101c0.003-0.003,0.007-0.004,0.01-0.007
        c0.016-0.018,0.022-0.041,0.035-0.06c0.021-0.031,0.043-0.061,0.057-0.097C22.477,20.143,22.48,20.109,22.485,20.074z M8.5,11.058
        l4.556,3.743L8.5,18.881V11.058z M15,15.102L9.397,10.5h11.206L15,15.102z M13.838,15.443l0.844,0.694
        c0.092,0.075,0.205,0.113,0.317,0.113s0.226-0.038,0.317-0.113l0.844-0.694l4.53,4.057H9.308L13.838,15.443z M16.944,14.801
        l4.556-3.743v7.823L16.944,14.801z">

    </path>
</svg>
</a>

</div>

<!-- Javascript -->
<script src='https://cdnjs.cloudflare.com/ajax/libs/jquery/3.2.1/jquery.min.js'></script>

<script id="rendered-js">
    var num = 10;

    var w = window.innerWidth;
    var h = window.innerHeight;

    var dirx = [];
    var diry = [];

    for (i = 0; i < num; i++) {
    //Crear corazon
    let heart = document.createElement("DIV");
    heart.className = "heart";
    document.body.appendChild(heart);
    //Asignar tamaño       
    let tam = Math.floor(Math.random() * 20 + 15);
    heart.style.width = tam + "px";
    heart.style.height = tam + "px";
    //Asignar posicion inicial
    let posy = Math.floor(Math.random() * 0.1 * h + 0.8 * h);
    heart.style.top = posy + "px";
    let posx = Math.floor(Math.random() * 0.8 * w + 0.1 * h);
    heart.style.left = posx + "px";
    //Crear vector direccion y id
    heart.id = "h" + i;
    diry[i] = Math.floor(Math.random() * 5 - 10);
    dirx[i] = Math.floor(Math.random() * 10 - 5);
    //Asignar evento
    heart.setAttribute("onclick", "deleteheart(this)");
}

window.requestAnimationFrame(move);
setInterval(function () {
    move();
}, 60);

function move() {

    for (i = 0; i < num; i++) {
    //Seleccion de corazon
    let heart = document.getElementById("h" + i);
    //Aumento de coordenadas
    let y = parseInt(heart.style.top) + diry[i];
    let x = parseInt(heart.style.left) + dirx[i];
    //Reinicio de coordenadas
    if (x > 0.8 * w) {x = 0.2 * w;}
    if (x < 0.2 * w) {x = 0.8 * w;}
    if (y < 0.2 * h) {y = 0.8 * h;}
    if (y > 0.8 * h) {y = 0.2 * w;}
    //Asigmnacion de coordenadas
    heart.style.top = y + "px";
    heart.style.left = x + "px";
}
}

function deleteheart(element) {
  element.style.display = "none";
}
    //# sourceURL=pen.js
</script>



</body>
</html>