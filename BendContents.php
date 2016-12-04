<h2>はりの曲げ</h2>
    <h3>曲げ応力</h3>
        <p><a href='http://d-engineer.com/img/c0043.gif' target='_blank' >http://d-engineer.com/img/c0043.gif</a></p>
        <p>
            上図のようにはりにせん断力が作用すると、
            部材の上面は引っ張られ、部材の下面は圧縮されることになります。
            引張も圧縮も受けない部材の中心部のことを、中立面といいます。
            この場合、部材の上面で引張応力が最大となり、部材の下面で圧縮応力が最大となります。
        </p>
        <p>
            以上のように、断面には　引張応力　と　圧縮応力　の２つの応力が発生していることになり、
            これらを総称して<strong>曲げ応力</strong>といいます。
        </p>
        <p>
            曲げ応力は<?php getInlineTex("\sigma") ?>で表され、
            <?php getTex("\sigma = \\frac{My}{I}") ?>
        </p>
        <p>
            <?php getInlineTex("I") ?>は断面二次モーメントと呼ばれ
            <?php getTex("I=\int_Ay^2dA") ?>
            で表す。</p>
        <p>
            また、断面係数<?php getInlineTex("Z") ?>を用いて
            <?php getTex("Z = \\frac{I}{y}") ?>
            と表せるので、最終的に曲げ応力は、
            <?php getTex("\sigma=\\frac{M}{Z}") ?>
            となる。
        </p>
    <h3>断面係数</h3>
        <p>
            断面係数とは、曲げに対する強さ・抵抗力を表す指標で、断面の形および寸法によって決まる値である。
            部材に発生する曲げ応力は、部材の断面形状によって異なる。また断面形状が同じでも、曲がる方向によって曲がりやすさも異なる。
        </p>
    <h3>たわみ</h3>
        <p>
            はりに作用する応力によって生じる変形のことをたわみと呼ぶ。
            求めるには、<strong>はりのたわみ曲線の微分方程式</strong>
            <?php getTex("\\frac{d^2y}{dx^2}=-\\frac{M}{EI}") ?>
            を用いる。
        </p>
        <p>
            たわみ角、すなわちある点においての、角度の変形量を求める。
            たわみ角<?php getInlineTex("\\theta") ?>が微小な時、<?php getInlineTex("\\tan\\theta\approx\\theta") ?>であるから、
            <?php getTex("\\theta = \\frac{dy}{dx}") ?>
            と表せる。
        </p>
        <p>
            よってたわみ角は、
            <?php getTex("\\theta=\\frac{dy}{dx}=-\int\\frac{M}{EI}dx+C_1") ?>
            で求められる。
        </p>
        <p>
            たわみ、すなわちある点においての荷重方向の変位量は、
            <?php getTex("y=-\int\biggl(\int\\frac{M}{EI}dx\biggr)dx+C_1x+C_2") ?>
            求まる。
        </p>
        <p>
            ここで<?php getInlineTex("C_1") ?>,<?php getInlineTex("C_2") ?>は積分定数で、はりの境界条件から決定される。
        </p>

