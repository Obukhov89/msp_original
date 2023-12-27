const setSession = (payload) => {
    sessionStorage.setItem("idAuthor", payload.idAuthor);
    sessionStorage.setItem("oldId", payload.oldId);
    sessionStorage.setItem("authorName", payload.authorName);
    sessionStorage.setItem("login", payload.login);
    sessionStorage.setItem("idRole", Number(payload.idRole));
    sessionStorage.setItem("isAdmin", payload.isAdmin);
    sessionStorage.setItem("books", Array(payload.books))
}

export default setSession;
