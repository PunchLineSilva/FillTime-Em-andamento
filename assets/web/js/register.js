import { HttpUser } from "../../_shared/js/HttpUser.js";
import { Toast } from "../../_shared/js/Toast.js";

const formRegister = document.querySelector("#formRegister");
const api = new HttpUser();
const toast = new Toast();

if (formRegister) {
    formRegister.addEventListener("submit", async (event) => {
        event.preventDefault();
        
        const userData = new FormData(formRegister);
        
        try {
            const userCreated = await api.createUser(userData);
            
            if (userCreated.type === "success") {
                toast.show(userCreated.message, "success");
                setTimeout(() => {
                    window.location.href = "/FillTime/login"; 
                }, 2000);
            } else {
                toast.show(userCreated.message, "error");
            }
        } catch (error) {
            toast.show("Ocorreu um erro ao tentar cadastrar. Tente novamente.", "error");
            console.error("Erro no cadastro:", error);
        }
    });
}