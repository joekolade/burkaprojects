tx_csseo {
    1 = tx_burkaprojects_domain_model_project

    1.enable = GP:tx_burkaprojects_projectlist|project

    1.fallback {

        title = title
        description = teaser
    }

    1.evaluation {
        getParams = &tx_burkaprojects_projectlist[controller]=Project&tx_burkaprojects_projectlist[action]=Show&tx_burkaprojects_projectlist[project]=|
        detailPid = 35
    }
}