drop database if exists catalogo;
create database catalogo;
use catalogo;
create table libros (
    id int  auto_increment,
    titulo varchar(255) not null,
    autor varchar(255) not null,
    editorial varchar(255) not null,
    fecha date,
    primary key (id)
);
insert into libros values (null,
"Artificial Intelligence: A Modern Approach",
"Stuart Russell", 
"Pearson", 
"1998-02-01" );

insert into libros values (null,
"Operating System Concepts Essentials",
"Abraham Silberschatz", 
"Wiley", 
"2014-02-28" );

insert into libros values (null,
"Introduction to Algorithms",
"Cormen, Thomas H", 
"MIT Press", 
"2008-12-31" );

insert into libros values (null,
"Hands-on Machine Learning with Scikit-Learn, Keras, and TensorFlow: Concepts, Tools, and Techniques to Build Intelligent Systems ",
"Aurélien Géron", 
"O'Reilly Media, Inc, USA", 
"2019-10-11" );

insert into libros values (null,
"Artificial Intelligence: A Modern Approach",
"Peter Norvig", 
"Pearson", 
"2021-05-13" );