(function() {

    var db = {

        loadData: function(filter) {
            return $.grep(this.taxes, function(tax) {
                return (!filter.TaxName || tax.TaxName.indexOf(filter.TaxName) > -1)
                    && (filter.Inactive === undefined || tax.Inactive === filter.Inactive);
            });
        },

        insertItem: function(insertingClient) {
            this.clients.push(insertingClient);
        },

        updateItem: function(updatingClient) { },

        deleteItem: function(deletingClient) {
            var clientIndex = $.inArray(deletingClient, this.clients);
            this.clients.splice(clientIndex, 1);
        }

    };

    window.db = db;


    db.countries = [
        { Name: "", Id: 0 },
        { Name: "United States", Id: 1 },
        { Name: "Canada", Id: 2 },
        { Name: "United Kingdom", Id: 3 },
        { Name: "France", Id: 4 },
        { Name: "Brazil", Id: 5 },
        { Name: "China", Id: 6 },
        { Name: "Russia", Id: 7 }
    ];

    db.taxes = [
        {
            "TaxName": "Vat",
            "Inactive": false,
                      
        },
        {
          "TaxName": "NBT",
          "Inactive": true,
              
        }
        
     ];

}());