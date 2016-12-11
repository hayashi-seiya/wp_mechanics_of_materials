<h2>引張と圧縮</h2>
    <h3>引張力と圧縮力とは</h3>
        <p>
            これらの力は、文字通り部材を引っ張る力を引張力、圧縮する力を圧縮力と言う。また力がかかる方向を、一般的に軸方向と呼ぶ。
            材料は引張力が強く作用すると破断してしまうが、その時点での引張応力のことを引っ張り強さと言い、単位は
            <?php getInlineTex("N/mm^2") ?>で表される。破断の仕方には2通りがあり、伸びてから破断するものと、
            伸びずに破断するものがある。伸びてから破断する材料には主に炭素鋼が挙げられ、伸びずに破断するものにはアルミニウム合金や鋳鉄が挙げられる。
        </p>
    <h3>棒の伸び</h3>
        <p>
            断面積に比べて長さが長い部材のことを棒と呼び、真っ直ぐな部材を真直棒と呼ぶ。
        </p>
        <p><img src="<?php echo get_template_directory_uri() ?>/tensile_img1.jpeg" class="img" style="max-height:250px !important;" alt="図1 引張応力による伸び"/></p>
        <p>
            図のように長さ<?php getInlineTex("l") ?>、断面積<?php getInlineTex("A") ?>の均質で等方な棒<?php getInlineTex("AB") ?>がある。
            棒の軸方向に荷重<?php getInlineTex("P")?>が作用している時の
            棒の伸び<?php getInlineTex("\lambda") ?>を求める。
            軸方向の応力 <?php getInlineTex("\sigma=P/A") ?> が比例限度内、つまりフックの法則が成り立つ場合、応力は
            <?php getTex("\sigma=E\\varepsilon")?>
            と書くことができる。ここで<?php getInlineTex("E")?>は弾性係数と呼ばれ、これは応力ーひずみ線図の比例区間内の傾きである。これよりひずみは、
            <?php getTex("\\varepsilon=\\frac{\sigma}{E}=\\frac{P}{AE}") ?>
            となる。
        </p>
        <p>
            一方、ひずみは <?php getInlineTex("\\varepsilon=\\frac{\lambda}{l}") ?>で表され、
            この式から伸び<?php getInlineTex("\lambda") ?>は
            <?php getTex("\lambda=\\varepsilon l=\\frac{Pl}{AE}")?>
            となる。
        </p>
    <h3>段付き棒の伸び</h3>
        <img src="<?php echo get_template_directory_uri() ?>/tensile_img2.jpeg" class="img" alt="図2 段付き棒の伸び"/>
        <p>
            図のような段付き棒の全体の伸びを求める。
            断面の異なる部分の長さ<?php getInlineTex("l_i")?>、
            断面積<?php getInlineTex("A_i")?>、
            弾性定数<?php getInlineTex("E_i")?><?php getInlineTex(" (i=1,2,3)")?>であり、
            棒にはその両端にのみ荷重<?php getInlineTex("P")?>が作用している。
            この時、段付き棒の各要素ごとにかかる力に着目する。
        </p>
        <img src="<?php echo get_template_directory_uri() ?>/tensile_img3.jpeg" class="img" style="max-height: 300px !important;" alt="図2 段付き棒の荷重のかかり方"/>
        <p>
            上図のようになっており、よって
            内力<?php getInlineTex("Q_1")?>、
            <?php getInlineTex("Q_2")?>の大きさは
            外力<?php getInlineTex("P")?>と等しい。
            このことから棒全体の伸びは、
            <?php getTex(
                "\lambda=\lambda_1+\lambda_2+\lambda_3=\\frac{Pl_1}{A_1E_1}+\\frac{Pl_2}{A_2E_2}+\\frac{Pl_3}{A_3E_3}=
                P\sum_{i=1}^3\\frac{l_i}{A_iE_i}"
            ) ?>
            のように得られる。
        </p>
    <h3>重ね合わせの原理</h3>
        <p>
            フックの法則は線形であるので、1つの部材に複数の荷重が作用している時の変形は、
            その部材に個々の荷重が加えられている時の変形を足し合わすことにより、
            求めることができる。これを重ね合わせの原理という。
        </p>
