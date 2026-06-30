DROP TABLE IF EXISTS wallet;
DROP TABLE IF EXISTS transactions;
CREATE TYPE type_transaction AS ENUM(
    'DEPOT',
    'RETRAIT'
);

CREATE TABLE wallet(
    code SERIAL PRIMARY KEY,
   nom VARCHAR(100) NOT NULL,
   prenom VARCHAR(100) NOT NULL,
   tel INTEGER NOT NULL

);
CREATE TABLE transactions(
    code SERIAL PRIMARY KEY,
    montant DECIMAL(10,2) NOT NULL,
    typ type_transaction NOT NULL,
    date DATE NOT NULL,
    wallet_code INTEGER NOT NULL,
    FOREIGN KEY (wallet_code) REFERENCES wallet(code) 

);
SELECT * FROM wallet;

