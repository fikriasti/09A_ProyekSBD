PGDMP     )        
            y            proyek_akhir    12.7    12.7                0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false                       0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false                       0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false                       1262    16608    proyek_akhir    DATABASE     ?   CREATE DATABASE proyek_akhir WITH TEMPLATE = template0 ENCODING = 'UTF8' LC_COLLATE = 'English_Indonesia.1252' LC_CTYPE = 'English_Indonesia.1252';
    DROP DATABASE proyek_akhir;
                postgres    false            ?            1259    16612    admin    TABLE     ?   CREATE TABLE public.admin (
    id integer NOT NULL,
    username character varying(15) NOT NULL,
    password character varying(10) NOT NULL,
    email character varying(20)
);
    DROP TABLE public.admin;
       public         heap    postgres    false            ?            1259    16615    movie    TABLE     C  CREATE TABLE public.movie (
    id_film integer NOT NULL,
    judul_film character varying(50) NOT NULL,
    genre character varying(10) NOT NULL,
    sutradara character(100) NOT NULL,
    production_house character(100) NOT NULL,
    usia_penonton character varying(10) NOT NULL,
    image_name character varying(100)
);
    DROP TABLE public.movie;
       public         heap    postgres    false            ?            1259    16618    review    TABLE     ?   CREATE TABLE public.review (
    review character(1000) NOT NULL,
    rating numeric NOT NULL,
    judul_film character varying(50) NOT NULL
);
    DROP TABLE public.review;
       public         heap    postgres    false            ?            1259    16624    users    TABLE     ?   CREATE TABLE public.users (
    username character varying(15) NOT NULL,
    password character varying(10) NOT NULL,
    email character varying(20) NOT NULL,
    handphone integer NOT NULL,
    birth date NOT NULL
);
    DROP TABLE public.users;
       public         heap    postgres    false                      0    16612    admin 
   TABLE DATA           >   COPY public.admin (id, username, password, email) FROM stdin;
    public          postgres    false    202   ?       	          0    16615    movie 
   TABLE DATA           s   COPY public.movie (id_film, judul_film, genre, sutradara, production_house, usia_penonton, image_name) FROM stdin;
    public          postgres    false    203   ?       
          0    16618    review 
   TABLE DATA           <   COPY public.review (review, rating, judul_film) FROM stdin;
    public          postgres    false    204   ?                 0    16624    users 
   TABLE DATA           L   COPY public.users (username, password, email, handphone, birth) FROM stdin;
    public          postgres    false    205   ?             x?????? ? ?      	   ?  x???As?0??ʯ?#??n(Ɖ'?BM;N??M??[?U??P?둃?0?????.z?{??(?DR"$[?Rr?b? ~O??ע??F??AA??}"'%[X?j?p???5o????EQ,RR;?͢yvB~??`??3??_??6vgd0f?|呯?c-a?;e??wVM??OO?u[?\k??t9eK??d??S(<~???"?5?	J{B???r???U07?ֶ?A4?i?؏?S?V$̸?JIu????%]3c??.lk)??~?V?d?????pH!???>?????3?}?:?{R?c)!w+?ֹG?9mj?
5???8?;?I#Kr7???????Ik?9?????k?F?! ???ﰵ??4???ؐ?D?2T??z?Q?]٦Բ???{??"?i????????????+????B?.?[?މ??D?U????[V???q??_?%???????x"u??8m:??o{?|x?Z+` ?r.?????>?F ?,??      
      x?????? ? ?            x?????? ? ?     