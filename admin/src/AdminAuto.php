<?php 
    function applicationName() {
        echo "Backend Admin Panel - Ver 1.0";
    }

    function guardCustomer()
    {
        return auth()->guard('customers');
    }
    
?>