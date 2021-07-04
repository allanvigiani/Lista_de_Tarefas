create table status(
	id serial primary key,
    status varchar(25) not null
);

insert into status(status) values ('pendente');
insert into status(status) values ('realizado');

create table tarefas(
	id serial primary key,
    id_status int not null default 1,
    foreign key(id_status) references status(id),
	tarefa text not null,
    data_cadastrado date not null default CURRENT_DATE
)