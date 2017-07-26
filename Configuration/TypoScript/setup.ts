
plugin.tx_burkaprojects_projectlist {
  view {
    templateRootPaths.0 = EXT:burkaprojects/Resources/Private/Templates/
    templateRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.templateRootPath}
    partialRootPaths.0 = EXT:burkaprojects/Resources/Private/Partials/
    partialRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.partialRootPath}
    layoutRootPaths.0 = EXT:burkaprojects/Resources/Private/Layouts/
    layoutRootPaths.1 = {$plugin.tx_burkaprojects_projectlist.view.layoutRootPath}
  }
  persistence {
    storagePid = {$plugin.tx_burkaprojects_projectlist.persistence.storagePid}
    #recursive = 1
  }
  features {
    #skipDefaultArguments = 1
  }
  mvc {
    #callDefaultActionIfActionCantBeResolved = 1
  }
}

plugin.tx_burkaprojects._CSS_DEFAULT_STYLE (
    textarea.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    input.f3-form-error {
        background-color:#FF9F9F;
        border: 1px #FF0000 solid;
    }

    .tx-burkaprojects table {
        border-collapse:separate;
        border-spacing:10px;
    }

    .tx-burkaprojects table th {
        font-weight:bold;
    }

    .tx-burkaprojects table td {
        vertical-align:top;
    }

    .typo3-messages .message-error {
        color:red;
    }

    .typo3-messages .message-ok {
        color:green;
    }
)

<INCLUDE_TYPOSCRIPT: source="FILE:EXT:burkaprojects/Configuration/TypoScript/Extensions/cs_seo_setup.ts">