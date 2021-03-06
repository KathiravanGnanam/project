PGDMP     1    .                  z            mini_project    13.4    13.4 )    ?           0    0    ENCODING    ENCODING        SET client_encoding = 'UTF8';
                      false            ?           0    0 
   STDSTRINGS 
   STDSTRINGS     (   SET standard_conforming_strings = 'on';
                      false            ?           0    0 
   SEARCHPATH 
   SEARCHPATH     8   SELECT pg_catalog.set_config('search_path', '', false);
                      false            ?           1262    16443    mini_project    DATABASE     p   CREATE DATABASE mini_project WITH TEMPLATE = template0 ENCODING = 'UTF8' LOCALE = 'English_United States.1252';
    DROP DATABASE mini_project;
                postgres    false            ?            1255    49283    test()    FUNCTION     K  CREATE FUNCTION public.test() RETURNS trigger
    LANGUAGE plpgsql
    AS $$
declare
i numeric(3);
BEGIN
for i in 1..100 loop
if i<10 then insert into list values(i,'one digit');
elseif i>9 and i<100 then insert into list values(i,'two digit');
else insert into list values(i,'three digit');
end if;
end loop;
return NEW;
END;
$$;
    DROP FUNCTION public.test();
       public          postgres    false            ?            1259    32847    admin    TABLE     ?   CREATE TABLE public.admin (
    admin_id integer NOT NULL,
    adm_name character varying(100) NOT NULL,
    adm_work character varying(100) NOT NULL
);
    DROP TABLE public.admin;
       public         heap    postgres    false            ?            1259    32829    customer    TABLE     ?   CREATE TABLE public.customer (
    cus_id integer NOT NULL,
    cus_name character varying(100),
    gender character varying(100),
    phone_num character varying(100),
    cus_city character varying(100)
);
    DROP TABLE public.customer;
       public         heap    postgres    false            ?            1259    32827    customer_cus_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.customer_cus_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 *   DROP SEQUENCE public.customer_cus_id_seq;
       public          postgres    false    202            ?           0    0    customer_cus_id_seq    SEQUENCE OWNED BY     K   ALTER SEQUENCE public.customer_cus_id_seq OWNED BY public.customer.cus_id;
          public          postgres    false    201            ?            1259    32837    login    TABLE     ?   CREATE TABLE public.login (
    login_id integer NOT NULL,
    user_name character varying(100),
    email_id character varying(100),
    password character varying(100)
);
    DROP TABLE public.login;
       public         heap    postgres    false            ?            1259    32835    login_login_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.login_login_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.login_login_id_seq;
       public          postgres    false    204            ?           0    0    login_login_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.login_login_id_seq OWNED BY public.login.login_id;
          public          postgres    false    203            ?            1259    24645    product    TABLE     p  CREATE TABLE public.product (
    pro_id integer NOT NULL,
    pro_name character varying(100),
    pro_brand character varying(100),
    pro_warranty character varying(100),
    pro_cost integer,
    pro_availability integer,
    image character varying(100),
    rating character varying(100),
    para character varying(100),
    category character varying(255)
);
    DROP TABLE public.product;
       public         heap    postgres    false            ?            1259    41059    review    TABLE     v   CREATE TABLE public.review (
    name character varying(100),
    rev_id integer,
    para character varying(1000)
);
    DROP TABLE public.review;
       public         heap    postgres    false            ?            1259    57525    sales    TABLE     ?   CREATE TABLE public.sales (
    sales_id integer NOT NULL,
    pro_name character varying(255),
    pro_id integer,
    pro_warranty character varying(255),
    pro_cost integer,
    quantity integer,
    date_time date,
    cus_id integer
);
    DROP TABLE public.sales;
       public         heap    postgres    false            ?            1259    57523    sales_sales_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.sales_sales_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 )   DROP SEQUENCE public.sales_sales_id_seq;
       public          postgres    false    208            ?           0    0    sales_sales_id_seq    SEQUENCE OWNED BY     I   ALTER SEQUENCE public.sales_sales_id_seq OWNED BY public.sales.sales_id;
          public          postgres    false    207            ?            1259    57537    service    TABLE     ?   CREATE TABLE public.service (
    service_id integer NOT NULL,
    product_id integer,
    issue_type character varying(255),
    status character varying(255)
);
    DROP TABLE public.service;
       public         heap    postgres    false            ?            1259    57535    service_service_id_seq    SEQUENCE     ?   CREATE SEQUENCE public.service_service_id_seq
    AS integer
    START WITH 1
    INCREMENT BY 1
    NO MINVALUE
    NO MAXVALUE
    CACHE 1;
 -   DROP SEQUENCE public.service_service_id_seq;
       public          postgres    false    210            ?           0    0    service_service_id_seq    SEQUENCE OWNED BY     Q   ALTER SEQUENCE public.service_service_id_seq OWNED BY public.service.service_id;
          public          postgres    false    209            E           2604    32832    customer cus_id    DEFAULT     r   ALTER TABLE ONLY public.customer ALTER COLUMN cus_id SET DEFAULT nextval('public.customer_cus_id_seq'::regclass);
 >   ALTER TABLE public.customer ALTER COLUMN cus_id DROP DEFAULT;
       public          postgres    false    201    202    202            F           2604    32840    login login_id    DEFAULT     p   ALTER TABLE ONLY public.login ALTER COLUMN login_id SET DEFAULT nextval('public.login_login_id_seq'::regclass);
 =   ALTER TABLE public.login ALTER COLUMN login_id DROP DEFAULT;
       public          postgres    false    204    203    204            G           2604    57528    sales sales_id    DEFAULT     p   ALTER TABLE ONLY public.sales ALTER COLUMN sales_id SET DEFAULT nextval('public.sales_sales_id_seq'::regclass);
 =   ALTER TABLE public.sales ALTER COLUMN sales_id DROP DEFAULT;
       public          postgres    false    208    207    208            H           2604    57540    service service_id    DEFAULT     x   ALTER TABLE ONLY public.service ALTER COLUMN service_id SET DEFAULT nextval('public.service_service_id_seq'::regclass);
 A   ALTER TABLE public.service ALTER COLUMN service_id DROP DEFAULT;
       public          postgres    false    209    210    210            ?          0    32847    admin 
   TABLE DATA           =   COPY public.admin (admin_id, adm_name, adm_work) FROM stdin;
    public          postgres    false    205   ?-       ?          0    32829    customer 
   TABLE DATA           Q   COPY public.customer (cus_id, cus_name, gender, phone_num, cus_city) FROM stdin;
    public          postgres    false    202   .       ?          0    32837    login 
   TABLE DATA           H   COPY public.login (login_id, user_name, email_id, password) FROM stdin;
    public          postgres    false    204   ?.       ?          0    24645    product 
   TABLE DATA           ?   COPY public.product (pro_id, pro_name, pro_brand, pro_warranty, pro_cost, pro_availability, image, rating, para, category) FROM stdin;
    public          postgres    false    200   }/       ?          0    41059    review 
   TABLE DATA           4   COPY public.review (name, rev_id, para) FROM stdin;
    public          postgres    false    206   ?1       ?          0    57525    sales 
   TABLE DATA           p   COPY public.sales (sales_id, pro_name, pro_id, pro_warranty, pro_cost, quantity, date_time, cus_id) FROM stdin;
    public          postgres    false    208   +2       ?          0    57537    service 
   TABLE DATA           M   COPY public.service (service_id, product_id, issue_type, status) FROM stdin;
    public          postgres    false    210   ?2       ?           0    0    customer_cus_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.customer_cus_id_seq', 1007, true);
          public          postgres    false    201            ?           0    0    login_login_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.login_login_id_seq', 1007, true);
          public          postgres    false    203            ?           0    0    sales_sales_id_seq    SEQUENCE SET     C   SELECT pg_catalog.setval('public.sales_sales_id_seq', 1011, true);
          public          postgres    false    207            ?           0    0    service_service_id_seq    SEQUENCE SET     D   SELECT pg_catalog.setval('public.service_service_id_seq', 3, true);
          public          postgres    false    209            P           2606    32851    admin admin_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.admin
    ADD CONSTRAINT admin_pkey PRIMARY KEY (admin_id);
 :   ALTER TABLE ONLY public.admin DROP CONSTRAINT admin_pkey;
       public            postgres    false    205            L           2606    32834    customer customer_pkey 
   CONSTRAINT     X   ALTER TABLE ONLY public.customer
    ADD CONSTRAINT customer_pkey PRIMARY KEY (cus_id);
 @   ALTER TABLE ONLY public.customer DROP CONSTRAINT customer_pkey;
       public            postgres    false    202            N           2606    32842    login login_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.login
    ADD CONSTRAINT login_pkey PRIMARY KEY (login_id);
 :   ALTER TABLE ONLY public.login DROP CONSTRAINT login_pkey;
       public            postgres    false    204            J           2606    24649    product product_pkey 
   CONSTRAINT     V   ALTER TABLE ONLY public.product
    ADD CONSTRAINT product_pkey PRIMARY KEY (pro_id);
 >   ALTER TABLE ONLY public.product DROP CONSTRAINT product_pkey;
       public            postgres    false    200            R           2606    57533    sales sales_pkey 
   CONSTRAINT     T   ALTER TABLE ONLY public.sales
    ADD CONSTRAINT sales_pkey PRIMARY KEY (sales_id);
 :   ALTER TABLE ONLY public.sales DROP CONSTRAINT sales_pkey;
       public            postgres    false    208            T           2606    57545    service service_pkey 
   CONSTRAINT     Z   ALTER TABLE ONLY public.service
    ADD CONSTRAINT service_pkey PRIMARY KEY (service_id);
 >   ALTER TABLE ONLY public.service DROP CONSTRAINT service_pkey;
       public            postgres    false    210            ?   O   x??9?0 ?????ؠ2&?I???r7?pr???b?]? G?
????5?s?,E?9???`??{?f???9      ?   ?   x????
?0Dϛ??4Iw???A?T?	??`JM??????????y3??Z~?&C????i"D?:p?|?s#
)??$NO??zYm??C?yg?3?[??i@?????9???#70h?YTF)??????+E?s??@?o}???g|??^B??V?      ?   ?   x?u?K?0D??a?!Nv?C??*??+%????M?"?n<?̳F""L?????<>??A?B"???<??$????OX	Lٶ"m+?9R?mU?5Ƒ7?ev>1U?6??Jd?<鮵DuDJbt?6]?Ib??Y?O??𧳆+?#???x?22??)	??Ԯ?!????V!?-?h?      ?   V  x??TMo?@<???wL????͑`'Ne7??U?e?W?6`?6???[??DM?r@Zv???1`L@X*,?-Vui???W???.`2????T?z^?? ?<??{?8>????(??Q???{HUQ?Eo??nRS$??????>?fv????p?? ???d##????dY+˺>q>d\`lJ??????6	???C?!?w??:W5???D?ameD ??I???O??g?G1^Ħ??ñ?a?֩????ݐ??&???*???_:ֵJv???f۞G?J????CLlXƇ0?,)??M?肖.h??BǋrF??#?a????f???_??m??ά?;|"??$????E?}??T%O??h=G7??P?gI?#'??F<':r?;b-,?ŋD?/?13??NS???ŀ?m	??l?>؈w?d湸??h??/k????X)??AZ#%????H?.x|???????#????|???W?O?8?y]?D?{??0Q?g;=??l]?=.?p??v??tx?y֓???AZ
?????L?/???6?B?4????t?ci???????/ܩ?6߅?ݪ???/???Y5??Ha??{?????'b?      ?   8   x??N,??,?4300?,.-H-R((?O)M.?ʆ˘?ɤ?%?%??dL!2\1z\\\ ??      ?   ?   x??ϱ? ???x?{??J??????Ņ??V??c4?,G?}??bA?̩D?2??@?A?5D)Ց?ȁ????????ˊ˝??|?ʲ6?q?????w,Lٯxxu???????ZKIͥ?S|?W??0?_??{q?	!>l?^`      ?   ?   x?3?4300?,,M??,?T((?O?I????	su?2??r?'%??3??KSa?1z\\\ f?b     