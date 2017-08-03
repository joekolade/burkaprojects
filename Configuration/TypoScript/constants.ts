
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
    storagePid =
  }

  settings {
    list {
      imageWidth = 546
      imageHeight = 307c
    }
  }
}
