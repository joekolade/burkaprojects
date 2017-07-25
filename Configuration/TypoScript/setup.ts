
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
  settings {
    overview = {$plugin.tx_burkaprojects_projectlist.settings.overview}

    list {
      imageWidth = {$plugin.tx_burkaprojects_projectlist.settings.list.imageWidth}
      imageHeight = {$plugin.tx_burkaprojects_projectlist.settings.list.imageHeight}
    }
    detail {
      imageWidth = {$plugin.tx_burkaprojects_projectlist.settings.detail.imageWidth}
      imageHeight = {$plugin.tx_burkaprojects_projectlist.settings.detail.imageHeight}
    }
  }
}

lib.pageid = TEXT
lib.pageid.data = page:uid

page.includeCSS {
  tx-burkaprojects = EXT:burkaprojects/Resources/Public/Css/burkaprojects_styles.css
}
page.includeJSFooter {
  tx-burkaprojects = EXT:burkaprojects/Resources/Public/Javascript/burkaprojects.js
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
