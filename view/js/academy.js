
let botones = document.querySelector(".informacion");
agregar_eventos();
function agregar_eventos(){
    let dato = document.getElementsByClassName("informacion");
    let inscripcion = document.getElementById("suscribirse");
    dato[0].addEventListener("click",function(){
        console.log("hisiste click");
        document.getElementById("titulo_modal").innerHTML = "INFORMACION DEL CURSO C++";
        document.getElementById("contenido_modal").innerHTML = valor_1("1");
        document.getElementById("suscribirse").href = inscripcion_curso;
        document.getElementById("modal_datos").classList.add("is-active");
    });
    dato[1].addEventListener("click",function(){
        console.log("hisiste click");
        document.getElementById("titulo_modal").innerHTML = "INFORMACION DEL CURSO DE DISEÑO DE PAGINAS WEB";
        document.getElementById("contenido_modal").innerHTML = valor_1("2");
        document.getElementById("suscribirse").href = inscripcion_curso;
        document.getElementById("modal_datos").classList.add("is-active");
    });
}
var inscripcion_curso = "";
function valor_1(opcion){
    let datos_numer = "";

    if(opcion == "1"){
        datos_numer = `
            <h1>C++</h1>
            <p>
                "Es un lenguaje de programación de propósito general que se utiliza en una amplia variedad de aplicaciones, 
                desde sistemas operativos y controladores de dispositivos hasta juegos y aplicaciones empresariales y 
                al tener acceso directo al sistema operativo se puede usar para simplificar ciertas cosas. 
                <i>Su versatilidad lo hace útil para muchos tipos de proyectos.</i>"
            </p>
            <br/>
            <h2>¿ De que consta este curso ?</h2>
            <br>
            <p>
                "El curso estara divido en 4 semanas de desarrollo de programacion , al dia el curso tendra una duracion de 
                3 horas , donde 2 horas seran usados para la parte practica y una 1 hora para la parte teorica , esto para poder adaptarnos.</br>
                Todos los viernes se dara una evaluacion a los estudiantes , donde tendran que desarrollar un sistema que puede ser 
                otorgado por el docente o eleccion de si mismo(considerar todo lo avanzado).
                "
            </p>
            <br/>
            <h2>LO QUE APRENDEREMOS</h2>
            <br/>
            <h2>PRIMER NIVEL</h2>
            <br/>
            <p>
                En esta unidad aprenderemos los conceptos basicos , donde la gran parte sera explicado con codigo y diapositivas ,
                para asi lograr comprender el concepto de programacion.
            </p>
            <ul>
                <li>VARIABLES.</li>
                <li>OUT-IN.</li>
                <li>CONDICIONALES.</li>
                <li> BUCLES </li>
                <li>EVALUACION DE PROYECTO.</li>
            </ul>
            <blockquote>
                std::cout<<"hola mundo!!"<<endl;
            </blockquote>
            <br/>
            <h3>SEGUNDO NIVEL</h3>
            <br/>
            <p>
                En esta unidad estaremos mas enfocado en los array y usaremos algunas librerias como conio.h
                donde se explicara el concepto fundamental de los contadores.
            </p>
            <br/>
            <ul>
                <li>ARRAYS</li>
                <li>CONTADORES</li>
                <li>ANIDAMIENTO DE ARRAYS</li>
                <li>FUNCIONES</li>
                <li>EVALUACION DE PROYECTO.</li>
            </ul>
            <blockquote>
                string datos[10] = [h][o][l][a][][m][u][n][d][o];
            </blockquote>
            <br/>
            <h3>TERCER NIVEL</h3>
            <br/>
            <p>
                En este nivel ya habremos aprendido sobre los conceptos de programacion , y ahora los pondremos a prueba 
                desarrollando un algoritmos de proceso de caracteres. Usaremos las estructuras.
            </p>
            <ul>
                <li>STRUCTURAS</li>
                <li>STRUCTURAS + CONTADORES</li>
                <li>STRUCTURAS + ARRAYS</li>
                <li>STRUCTURAS ANIDADAS</li>
                <li>EVALUACION DE PROYECTO.</li>
            </ul>
            <blockquote>
                struct datos{
                    int ho;
                    String la;
                    float mun;
                    bool do;
                };
            </blockquote>
            <br/>
            <h3>CUARTO NIVEL</h3>
            <br/>
            <p>
                En este nivel nos adentraremos en el concepto de la manipulacion de objetos POO (PROGRAMACION ORIENTADA A OBJETOS)
                , esta tecnologia no ayudara 
                a desarrollar videojuegos simples.
            </p>
            <ul>
                <li>POO</li>
                <li>POO + ESTRUCTURAS</li>
                <li>POO +  CAMPO DE DATOS</li>
                <li>POO </li>
                <li>EVALUACION DE PROYECTO.</li>
            </ul>
            <blockquote>
                class mago{
                    private:
                        int vida;
                        int puntos;
                    public:
                        void atakar()
                }
            </blockquote>
            <br/>
            <p>
                LOS CERTIFICADOS SERAN OTORGADOS A LOS ALUMNOS QUE MAS HALLAN DESTACADO .
            </p>

        `;
        inscripcion_curso = "https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera incribirme al curso de c++ &type=phone_number";
    }else if(opcion == 2){
        datos_numer = `

        `;
        inscripcion_curso = "https://api.whatsapp.com/send/?phone=925543023&text= hola quisiera incribirme al curso de DISEÑO DE PAGINAS WEB &type=phone_number";
    }

    return datos_numer;
}
