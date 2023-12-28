const setSession = (payload, payloadBooks) => {
    sessionStorage.setItem("idAuthor", payload.idAuthor);
    sessionStorage.setItem("oldId", payload.oldId);
    sessionStorage.setItem("authorName", payload.authorName);
    sessionStorage.setItem("login", payload.login);
    sessionStorage.setItem("idRole", Number(payload.idRole));
    sessionStorage.setItem("isAdmin", payload.isAdmin);
    sessionStorage.setItem("countBooks", Number(payloadBooks.countBooks))
    sessionStorage.setItem("books", JSON.stringify(payloadBooks.book))
}

export default setSession;
