tx_csseo {
    # new index and table name of the model
    1 = tx_myext_domain_model_mymod
    1 = tx_burkaprojects_domain_model_project

    # if the get parameter is set in the URL the cs_seo properties will be shown
    1.enable = GP:tx_burkaprojects_projectlist|project

    # if the model already has fields like title etc. define them as fallback
    1.fallback {

        # cs_seo title field fallback = mymod title field
        title = title

        # cs_seo description field fallback = mymod description field
        description = teaser
    }

    # enable evaluation for news
    1.evaluation {
        # additional params to initialize the detail view, the pipe will be replaced by the uid
        getParams = &tx_burkaprojects_projectlist[controller]=Project&tx_burkaprojects_projectlist[action]=Show&tx_burkaprojects_projectlist[project]=|

        # detail pid for the current records, only if set the table will be available
        detailPid = 35
    }
}