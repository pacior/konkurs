CREATE TABLE form (
id INT(6) UNSIGNED AUTO_INCREMENT PRIMARY KEY,
imie VARCHAR(100) NOT NULL,
nazwisko VARCHAR(100) NOT NULL,
nazwafirmy VARCHAR(100) NOT NULL,
miasto VARCHAR(100) NOT NULL,
ulica VARCHAR(100) NOT NULL,
nrdomu VARCHAR(100) NOT NULL,
kodpocztowy VARCHAR(100) NOT NULL,
telefon VARCHAR(100) NOT NULL,
email VARCHAR(50),
wynik VARCHAR(100) NOT NULL,
dystans VARCHAR(100) NOT NULL,
nrrej VARCHAR(100) NOT NULL,
nrvin VARCHAR(100) NOT NULL,
data VARCHAR(100) NOT NULL,
ilosc VARCHAR(100) NOT NULL,
typautobusu VARCHAR(100) NOT NULL,
trasa VARCHAR(100) NOT NULL,
rozmiar VARCHAR(100) NOT NULL,
plik VARCHAR(100) NOT NULL
);
ALTER TABLE form
ADD dateposted datetime NOT NULL;
