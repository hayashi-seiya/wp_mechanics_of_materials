<h2>応力とひずみ</h2>
<h3>応力とひずみとは</h3>
<p>機械を設計する際に、仕様を満たし、
    かつ安全な機械を作るためには、適切な材料・寸法・形状を決めなければならない。
    その最適な解を導く時に大事な考えとなるのが、この応力とひずみである。</p>
<h3>応力</h3>
<p>軸に引張(圧縮)荷重が作用している時に、その軸上の任意の断面に分布している力を引張(圧縮)応力という。</p>
<p>またこれらは、面に垂直な方向に働くため垂直応力ともいう。</p>
<p>＜応力がわかる図 1-1＞</p>
<p>垂直応力はよく<?php getInlineTex("\sigma")?>で表され、その求め方は、</p>
<p><?php getTex("\sigma=\\frac{P}{A}")?></p>
<p>である。<?php getInlineTex("A")?>は軸の断面積、<?php getInlineTex("P")?>は軸にかかる荷重である。
    <?php getInlineTex("P")?>が正なら引張力、負なら圧縮力である。</p>
<p>垂直応力とは、断面に生じる単位面積あたりの内力の、
    断面に垂直な方向成分であり、単位は<?php getInlineTex("Pa(N/m^2)")?>である。</p>
<h3>ひずみ</h3>
<p>材料に荷重を加えていくと、形状変化、つまり<strong>変形</strong>が起きる。
    長さ<?php getInlineTex("L")?>の棒に引張荷重を加えた結果、長さ<?php getInlineTex("L_1")?>に変形したとすると、
    <strong>伸び</strong>は<?php getInlineTex("L_1-L")?>になり、たいてい<?php getInlineTex("\lambda")?>で表せられる。
    また、単位長さあたりの伸びを<strong>ひずみ</strong>といい、<?php getInlineTex("\\varepsilon")?>で表される。すなわち</p>
<p><?php getTex("\\varepsilon=\\frac{L_1-L}{L}=\\frac{\lambda}{L}")?></p>
<p>となる。<strong>教科書ｐ21 2.5</strong></p>
<h3>縦ひずみと横ひずみ</h3>
<p>また荷重の種類によって<strong>引張ひずみ</strong>・<strong>圧縮ひずみ</strong>に分類され、
    荷重方向のひずみをまとめて<strong>垂直ひずみ</strong>という。</p>
<p>通常の材料であれば、材料に引張(圧縮)荷重が作用した場合、対象物の断面積は収縮(増大)する。</p>
<p>このように、荷重に垂直な方向のひずみを<strong>横ひずみ</strong>といい、<?php getInlineTex("\\varepsilon'")?>で表すと</p>
<p><?php getTex("\\varepsilon'=\\frac{d_1-d}{d}")?></p>
<p>となる。</p>
<p>これに対して、荷重方向のひずみをを<strong>縦ひずみ</strong>という。これは前述の垂直ひずみと同義である。</p>
<h3>ポアソン比</h3>
<p>縦ひずみに対する横ひずみの比を<?php getInlineTex("\\nu")?>で表しポアソン比と呼ぶ。</p>
<p><?php getTex("\\nu=-\\frac{\\varepsilon'}{\\varepsilon}")?></p>
<p>パアソン比がマイナスで表現されているのは、
    引張荷重が作用したときは、縦ひずみ<?php getInlineTex("\\varepsilon")?>が正、
    横ひずみ<?php getInlineTex("\\varepsilon'")?>は負であり、
    圧縮荷重が作用したときは、縦ひずみ<?php getInlineTex("\\varepsilon")?>が負、
    横ひずみ<?php getInlineTex("\\varepsilon'")?>は正であるためである。</p>
<p>多くの材料のポアソン比は<?php getInlineTex("0.25〜0.35")?>である。</p>
