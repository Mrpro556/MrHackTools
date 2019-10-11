<?php
$username = "MrHack";
$password = "MisterHack";

system('clear');
echo "Login Username And Password!!\n";
echo "\e[0;36musername : \e[0m";
$user = trim(fgets(STDIN));
echo "\e[0;36mpassword : \e[0m";
$pass = trim(fgets(STDIN));
if($user == $username && $pass == 
$password)
{
echo "login sukses~\n";
sleep(2);
system(clear);
echo "[+] Starting Script\n";
sleep(2);
echo "[+] Loading 10%\n";
sleep(2);
echo "[+] Loading 50%\n";
sleep(2);
echo "[°] Sukses Open Script\n";
sleep(2);
system(clear);
echo "\e[0;36m\n █▄─▄█ █▀▀▄ █── ▄▀▄ ▄▀ █─▄▀
 █─█─█ █▐█▀ █▀▄ █▀█ █─ █▀▄─
 ▀───▀ ▀─▀▀ ▀─▀ ▀─▀ ─▀ ▀─▀▀\e[0m\n";
echo "misalnya pilih tools installer\n";
echo "[1] phising FreeFire
[2] Prankers\n";
echo "pilih nomor : \n";
$menu = trim(fgets(STDIN));
if($menu == 1)
{
system('cd /sdcard
ls
cd FreeFire
ls
bash freefire.sh');
}
if($menu == 2)
{
system('git clone https://github.com/ClayHackerTeam/Prankers');
}

}
else
{
echo "login gagal\n";
}


?>