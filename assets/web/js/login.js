import { HttpUser } from "../../_shared/js/HttpUser.js";
import { Toast } from "../../_shared/js/Toast.js";

const requestUserLogin = new HttpUser();
const toast = new Toast();

const formLogin = document.querySelector("#formLogin");

if (formLogin) {
    formLogin.addEventListener("submit", async (event) => {
        event.preventDefault();
        const loginData = new FormData(formLogin);
        const headers = {
            email: loginData.get("email"),
            password: loginData.get("password")
        };

        try {
            const userLogin = await requestUserLogin.loginUser({}, headers);
            toast.show(userLogin.message, userLogin.type);
            
            if (userLogin.type === "success") {
                localStorage.setItem("userLogin", JSON.stringify(userLogin.data));
                
                setTimeout(() => {
                    window.location.href = "/FillTime/admin"; 
                }, 2000);
            }
        } catch (error) {
            toast.show("Ocorreu um erro ao tentar fazer login. Tente novamente.", "error");
            console.error("Erro ao fazer login:", error);
        }
    });
}