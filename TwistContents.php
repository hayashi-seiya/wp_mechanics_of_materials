<h2>軸のねじり</h2>
    <h3>ねじりとは</h3>
        <p>
            軸の両端を雑巾のように絞ると、軸の両端には互いに逆向きの力が作用している。
            この時、手から軸には回転させようとする力、すなわちモーメントが加えられている。
            軸を回転させる方向に加わるモーメントを<strong>ねじりモーメント</strong>、
            あるいは<strong>トルク</strong>という。また、
            軸をねじる現象のことを<strong>ねじり</strong>という。
        </p>
        <p>
            このねじりモーメントはせん断力から発生するもので、
            ねじりはせん断応力による変化を考えることにより、求めることができる。
        </p>
    <h3>ねじれ角</h3>
        <p>
            左側を壁に固定し、右端にねじりモーメント<?php getInlineTex("T") ?>を
            受ける半径<?php getInlineTex("r") ?>の真直丸軸の変形の様子を以下の図に示す。
        </p>
        <img src="<?php echo get_template_directory_uri() ?>/twist_img1.jpeg" class="img" alt="図1 ねじりモーメントとねじり"/>
        <p>
            この時の横断面の相対回転角<?php getInlineTex("\phi") ?>をねじれ角と呼ぶ。
            また、単位長さあたりのねじれ角を比ねじれ角と呼び、<?php getInlineTex("\\theta") ?>で表す。
            断面が一様であれば、長さ<?php getInlineTex("l") ?>の軸のどの断面においても比ねじれ角は同じである。
        </p>
        <p>
            せん断ひずみとねじれ角の関係は、
            <?php getTex("\gamma=r\\theta=r\\frac{\phi_l}{l}") ?>
            となり、せん断ひずみは、両端のねじれ角に比例し、軸の長さ<?php getInlineTex("l") ?>に反比例する。
        </p>
    <h3>軸の応力とひずみ</h3>
        <p>
            せん断応力<?php getInlineTex("\\tau") ?>とせん断ひずみ<?php getInlineTex("\gamma") ?>の関係は、
            <?php getTex("\\tau=G\gamma") ?>
            で表される。これはせん断変形におけるフックの法則である。
            ここで<?php getInlineTex("G") ?>は剛性率、せん断弾性係数、あるいは横弾性係数と呼ばれ、
            一般的には横弾性係数ということが多い。
        </p>
        <p>
            任意の半径<?php getInlineTex("a") ?>でのせん断応力は
            <?php getTex("\\tau=\\frac{a}{r}\\tau_{max}") ?>
            となり、半径<?php getInlineTex("r") ?>で最大せん断応力となる。
        </p>
        <p>
            ねじりモーメント<?php getInlineTex("T") ?>は上記の2式から、
            <?php getTex("T=\\frac{\\tau_{max}}{r}\int_Aa^2dA=\\frac{\\tau_{max}}{r}I_p\ ,\hspace{5mm}I_p=\int_Aa^2dA") ?>
            となる。ここで<?php getInlineTex("I_p") ?>は断面二次極モーメントという。
            式4.7と4.8から<?php getInlineTex("\\tau_{max}") ?>を消去すると、せん断応力<?php getInlineTex("\\tau") ?>は
            <?php getTex("\\tau=\\frac{Tr}{I_p}") ?>
            とかける。
        </p>
        <p>
            ここでの断面二次係数と、軸の外表面に生じる最大せん断応力は、
            丸軸の場合
            <?php getTex("
                    \\tau_{max}=\\frac{Ta}{I_p}=\\frac{Td}{2I_p}=\\frac{16}{\pi}\\frac{T}{d^3}=\\frac{T}{Z_p},\ \hspace{5mm}Z_p=\\frac{\pi}{16}d^3
                    ")
            ?>
            中空軸の場合
            <?php getTex("
                    \\tau_{max}=\\frac{Ta}{I_p}=\\frac{Td_o}{2I_p}=\\frac{16d_o}{\pi\bigr(d^4_0-d^4_1\bigl)}T=\\frac{T}{Z_p},\ \hspace{5mm}Z_p=\\frac{\pi}{16}\\frac{\bigr(d^4_0-d^4_1\bigl)}{d_o}
                    ")
            ?>
        </p>
        <p>
            ここで<?php getInlineTex("Z_p") ?>は極断面係数と呼ばれ、最大せん断応力を求めるのに有効である。
        </p>
    <h3>軸のねじれ角</h3>
        <p>
            図のような、半径<?php getInlineTex("r") ?>、長さ<?php getInlineTex("l") ?>の軸に
            ねじりモーメント<?php getInlineTex("T") ?>が作用している時の、
            ねじれ角は最大せん断ひずみ<?php getInlineTex("\gamma_{max}") ?>を用いて表すことができる。
            ねじれ角<?php getInlineTex("\phi") ?>は、
            <?php getTex("\phi=\gamma_{max}\\frac{l}{r}=\\frac{\\tau_{max}}{G}\\frac{l}{r}") ?>
            となる。</p>
        <p>
            さらに、ねじりモーメント<?php getInlineTex("T") ?>の式より、<?php getInlineTex("\\tau_{max}"); ?>を
            <?php getInlineTex("T") ?>で表せば、以下のねじれ角とねじりモーメントが得られる。
            <?php getTex("\phi=\\frac{\\tau_{max}l}{Ga}=\\frac{Tl}{GI_p}") ?>
            この式より、ねじれ角はねじりモーメントに比例することがわかる。
        </p>
