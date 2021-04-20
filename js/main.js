function show_update_form_for_portfolio(element, year, site, description, id) {
    element.parentNode.parentNode.innerHTML = `
        <td>
            <form method="post" action="/red_portfolio/update_data">
                <input type="number" min="1" max="2020" name="update_year" value="` + year + `">
                <input type="url" name="update_site" value="` + site + `">
                <input name="update_description" value="` + description + `">
                <input type="hidden" name="update_id" value="` + id + `">
                <input type="submit" value="изменить">
            </form>
        </td>
      `;
}

function show_update_form_for_news(element, title, text, id) {
    element.parentNode.innerHTML = `
        <td>
            <form method="post" action="/red_news/update_data">
                <input name="update_title" value="` + title + `">
                <input name="update_text" value="` + text + `">
                <input type="hidden" name="update_id" value="` + id + `">
                <input type="submit" value="изменить">
            </form>
        </td>
      `;
}

function show_update_form_for_users(element, email, password, id) {
    element.parentNode.innerHTML = `
        <td>
            <form method="post" action="/red_users/update_data">
                <input type="email" name="update_email" value="` + email + `">
                <input name="update_password" value="` + password + `">
                <select name="update_status">
                    <option selected>user</option>
                    <option>admin</option>
                </select>
                <input type="hidden" name="update_id" value="` + id + `">
                <input type="submit" value="изменить">
            </form>
        </td>
      `;
}