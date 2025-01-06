drop database if exists coaching_basket ; 
create database coaching_basket; 
use coaching_basket; 

CREATE TABLE Coach (
    ID INT PRIMARY KEY AUTO_INCREMENT, 
    Nom VARCHAR(255) NOT NULL,            
    Specialite VARCHAR(255) NOT NULL,     
    Experience INT NOT NULL,             
    Tarif DECIMAL(10, 2) NOT NULL,       
    Localisation VARCHAR(255) NOT NULL,   
    Disponibilite VARCHAR(255) NOT NULL   
);

CREATE TABLE Utilisateur (
    ID INT PRIMARY KEY AUTO_INCREMENT, 
    Nom VARCHAR(255) NOT NULL, 
    Type VARCHAR(50) NOT NULL,   
    Localisation VARCHAR(255) NOT NULL 
);

CREATE TABLE Reservation (
    ID INT PRIMARY KEY AUTO_INCREMENT,  
    Utilisateur_ID INT NOT NULL,   
    Coach_ID INT NOT NULL,          
    Date DATE NOT NULL,    
    Statut VARCHAR(50) NOT NULL,  
    FOREIGN KEY (Utilisateur_ID) REFERENCES Utilisateur(ID),
    FOREIGN KEY (Coach_ID) REFERENCES Coach(ID) 
);

CREATE TABLE Evaluation (
    ID INT PRIMARY KEY AUTO_INCREMENT,  
    Coach_ID INT NOT NULL,           
    Utilisateur_ID INT NOT NULL,      
    Note INT NOT NULL,             
    Commentaire TEXT,        
    FOREIGN KEY (Coach_ID) REFERENCES Coach(ID),    
    FOREIGN KEY (Utilisateur_ID) REFERENCES Utilisateur(ID)
);


-- A REVOIIR!!
insert into user values (null, "josh","joshuan", "@gmail.com",
"123","admin");
insert into user values (null,"mika","michael","b@gmail.com",
"456","user");