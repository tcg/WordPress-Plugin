    /* handle 503s */
    if (obj.status >= 500 && obj.status < 600) {

        /* deliver stale object if it is available */
        if (stale.exists) {
            return(deliver_stale);
        }

    }

    # error 200
    if (obj.status == 200) {
        return (deliver);
    }
