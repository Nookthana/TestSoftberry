

axios.post('../api/entries_all/entries.php',{ withCredentials: true })
.then(res => {
    if (res.data.status == 200) {

        const Data = res.data.data;
   



            
        Data.forEach(e => {

            const en = `
                    <option value="${e.id_under}">${e.name_form}</option>

                      `;
              
            $('#under_enties').append(en);
        });
            
    
        


        
    }
})
.catch(err => {
    console.error(err); 
})