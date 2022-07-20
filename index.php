<!DOCTYPE html>
<html>
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title>khindy zharifany zharifanny aka forssellfrtz</title>
	<link rel="stylesheet" href="css/ganteng.css">
	<script src="js/kalkulator.js"></script>
</head>
<body>
	
	<nav>
		<div class='header'>
			<div class="" align="center" >
				<a href="index.php"><h1>👾💎👁️📱✨</h1></a>

			</div>
			<h1 class='title'>khindy zharifany zharifanny aka forssellfrtz</h1>
		</div>
	</nav>

	<div class="about">
		<div class="PULSE">
			saya khindy zharifany membuat skrip web ini dengan bertujuan untuk menyelesaikan tugas akhir mata kuliah pemrograman web.
		</div>
	</div>
	

	<div>
		<div class="navigasi">
			<ul>
				<li><a href="#kalkulator">KALKULATOR</a></li>
				<li><a href="#kalender">KALENDER</a></li>
				<li><a href="#io">I/O</a></li>
			</ul>
			<hr>
		</div>
	  
	</div>

    <section id="kalkulator">
        <div class="kolom" align="center">
        	<p class="title">kalkulator</p>
        	<p class="title">"program kalkulator sederhana"</p>

        	<table border="1" cellspacing="35" cellpadding="5" width="30%">
        		<tr>
                    <td align="right" colspan="4" id="inputLabel">0</td>
                </tr>
                <tr align="center">
                    <td colspan="3"><button onclick="pushBtn(this);">reset</button></td>
                    <td><button onclick="pushBtn(this);">/</button></td>
                </tr>
                <tr align="center">
                    <td><button onclick="pushBtn(this);">7</button></td>
                    <td><button onclick="pushBtn(this);">8</button></td>
                    <td><button onclick="pushBtn(this);">9</button></td>
                    <td><button onclick="pushBtn(this);">*</button></td>
                </tr>
                <tr align="center">
                    <td><button onclick="pushBtn(this);">4</button></td>
                    <td><button onclick="pushBtn(this);">5</button></td>
                    <td><button onclick="pushBtn(this);">6</button></td>
                    <td><button onclick="pushBtn(this);">-</button></td>
                </tr>
                <tr align="center">
                    <td><button onclick="pushBtn(this);">1</button></td>
                    <td><button onclick="pushBtn(this);">2</button></td>
                    <td><button onclick="pushBtn(this);">3</button></td>
                    <td><button onclick="pushBtn(this);">+</button></td>
                </tr>
                <tr align="center">
                    <td colspan="2"><button onclick="pushBtn(this);">0</button></td>
                    <td><button onclick="pushBtn(this);">.</button></td>
                    <td><button onclick="pushBtn(this);">=</button></td>
                </tr>
            </table>
        </div>
        <script src="js/kalkulator.js"></script>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>

    <section id="kalender">
	    <div class=>
	        <div class=>
	            <p class="title">kalender</p>
	            <p class="title">"program sederhana dengan metode include"</p>
	        </div>

	        <div class>
	            <div>
	                <div>
	                    <?php
	                    include 'php/kalender.php';
	                    ?>
	                </div>
	            </div>
	        </div>
	</section>


    <br>
    <br>
    <br>
    <br>
    <br>


    <section id="io">
        <div class="tengah">
            <div class="kolom">
	            <p class="title">input & output</p>
	            <p class="title">"input & output menggunakan fopen pada php"</p>
                <p class="title">"buku tamu"</p>
		<form name="form1" method="post" action="php/proses.php">
			<table width="10%" border="0" align="center" cellspacing="20" cellpadding="0">
				<tr>
					<td>nama</td>
					<td><input name="nama" type="text" id="nama"></td>
				</tr>

				<tr>
					<td>alamat</td>
					<td><input name="alamat" type="text" id="alamat"></td>
				</tr>

				<tr>
					<td>e-mail</td>
					<td><input name="email" type="text" id="email"></td> </tr>
				</tr>

				<tr>
					<td>status</td>
					<td>
						<select name="status" id="status">
							<option>pelajar</option>
							<option>pekerja swasta</option>
							<option>wiraswasta</option>
							<option>buruh</option>
							<option>asn</option>
						</select>
					</td>
				</tr>

				<tr>
					<td>Komentar</td>
					<td><textarea name="komentar" id="komentar"></textarea></td> </textarea>
				</tr>

				<tr>
					<td></td>
					<td><input type="submit" name="Submit" value="Kirim"><input type="reset" name="Submit2" value="Batal">
				</td>
				</tr>
			</table>
		</form>

		<div  align="center">
			<a href="php/lihat.php">lihat buku tamu</a>
		</div>

	</div>
    </section>

    <br>
    <br>
    <br>
    <br>
    <br>

	<div id="footer">
		<br />
			© 2022 khindy zharifany f.f.
		<br />
		2100018062
	</div>

	

</body>
</html>