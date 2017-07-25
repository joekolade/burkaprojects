
plugin.tx_burkaprojects_projectlist {
  view {
    # cat=plugin.tx_burkaprojects_projectlist/file; type=string; label=Path to template root (FE)
    templateRootPath = EXT:burkaprojects/Resources/Private/Templates/
    # cat=plugin.tx_burkaprojects_projectlist/file; type=string; label=Path to template partials (FE)
    partialRootPath = EXT:burkaprojects/Resources/Private/Partials/
    # cat=plugin.tx_burkaprojects_projectlist/file; type=string; label=Path to template layouts (FE)
    layoutRootPath = EXT:burkaprojects/Resources/Private/Layouts/
  }
  persistence {
    # cat=plugin.tx_burkaprojects_projectlist//a; type=string; label=Default storage PID
    storagePid = 2
  }

  settings {
    # cat=plugin.tx_burkaprojects_projectlist//a; type=integer; label=PID of Overview page
    overview = 1

    list {
      # 16 / 9
      imageWidth = 931
      imageHeight = 524
    }

    detail {
      # 16 / 9
      imageWidth = 354
      imageHeight = 199
    }
  }
}
