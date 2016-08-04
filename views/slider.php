  <div class="hide-for-small-only">
    <div id="container">
    <div id="slider">
        <!-- La banderolle qui contiens toute les images -->
        <div id="mask">
            <ul id="image_container">
                <li><img src="/public/images/avto1_1.jpg"></li>
                <li><img src="/public/images/avto2_2.jpg"></li>
                <li><img src="/public/images/avto3_3.jpg"></li>
            </ul>
        </div>
        <img src="/public/images/glass.png" id="glass">
        <ul id="dots">
            <!-- les petits points qui affichent ou nous en somme sur le slide -->
            <li class="button1" onClick="changeImage(1)" ></li>
            <li class="button2" onClick="changeImage(2)" ></li>
            <li class="button3" onClick="changeImage(3)" ></li>
        </ul>
        <img src="/public/images/fleche-gauche.png" id="fleche_gauche" class="fleche" onClick="prevImage()" >
        <img src="/public/images/fleche-droite.png" id="fleche_droite" class="fleche" onClick="nextImage()" >
    </div>
</div>
</div>