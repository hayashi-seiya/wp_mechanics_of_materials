<h2>引張と圧縮</h2>
<h3>引張力と圧縮力とは</h3>
<p>これらの力は、文字通り部材を引っ張る力を引張力、圧縮する力を圧縮力と言う。また力がかかる方向を、一般的に軸方向と呼ぶ。</p>
<p>材料は引張力が強く作用すると破断してしまうが、その時点での引張応力のことを引っ張り強さと言い、単位は
    <?php getInlineTex("N/mm^2") ?>で表される。破断の仕方には2通りがあり、伸びてから破断するものと、
    伸びずに破断するものがある。伸びてから破断する材料には主に炭素鋼が挙げられ、伸びずに破断するものにはアルミニウム合金や鋳鉄が挙げられる。</p>
<h3>棒の伸び</h3>
<p>断面積に比べて長さが長い部材のことを棒と呼び、真っ直ぐな部材を真直棒と呼ぶ。</p>
<p><strong>P33 図3.2挿入</strong></p>
<p>図のように長さ<?php getInlineTex("l") ?>、断面積<?php getInlineTex("A") ?>の均質で等方な棒<?php getInlineTex("AB") ?>がある。
    棒の軸方向に荷重<?php getInlineTex("P")?>が作用している時の
    棒の伸び<?php getInlineTex("\lambda") ?>を求める。
    軸方向の応力 <?php getInlineTex("\sigma=P/A") ?> が比例限度内、つまりフックの法則が成り立つ場合、応力は</p>
<p><?php getTex("\sigma=E\\varepsilon")?></p>
<p>と書くことができる。ここでEは弾性係数と呼ばれ、これは応力ーひずみ線図の比例区間内の傾きである。これよりひずみは、</p>
<p><?php getTex("\\varepsilon=\\frac{\sigma}{E}=\\frac{P}{AE}") ?></p>
<p>となる。一方、ひずみは <?php getInlineTex("\\varepsilon=\\frac{\lambda}{l}") ?>で表され、
    この式から伸び<?php getInlineTex("\lambda") ?>は</p>
<p><?php getTex("\lambda=\\varepsilon l=\\frac{Pl}{AE}")?></p>
<p>となる。</p>
<h3>段付き棒の伸び</h3>
<p><strong>P35 図3.5挿入</strong></p>
<p>図のような段付き棒の全体の伸びを求める。
    断面の異なる部分の長さ<?php getInlineTex("l_i")?>、
    断面積<?php getInlineTex("A_i")?>、
    弾性定数<?php getInlineTex("E_i")?><?php getInlineTex(" (i=1,2,3)")?>であり、
    棒にはその両端にのみ荷重<?php getInlineTex("P")?>が作用している。
    この時、内力<?php getInlineTex("Q_1")?>、
    <?php getInlineTex("Q_2")?>の大きさは
    外力<?php getInlineTex("P")?>と等しい。
    このことから棒全体の伸びは、</p>
<p><?php getTex(
        "\lambda=\lambda_1+\lambda_2+\lambda_3=\\frac{Pl_1}{A_1E_1}+\\frac{Pl_2}{A_2E_2}+\\frac{Pl_3}{A_3E_3}=
        P\sum_{i=1}^3\\frac{l_i}{A_iE_i}"
    ) ?></p>
<p>のように得られる。</p>
<h3>重ね合わせの原理</h3>
<p>フックの法則は線形であるので、1つの部材に複数の荷重が作用している時の変形は、
    その部材に個々の荷重が加えられている時の変形を足し合わすことにより、
    求めることができる。これを重ね合わせの原理という。</p>
