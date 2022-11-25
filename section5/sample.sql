create table categories(
    id integer primary key,
    title text
);

drop table categories;

insert into categories (id, title) values (1, 'programming');

select * from categories;

update categories set title = 'PG' where id = 1;

delete from categories where id = 1;

