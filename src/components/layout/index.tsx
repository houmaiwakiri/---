import { VFC } from "react";
import { Header } from "/Users/user/OneDrive/ドキュメント/tonari/src/components/layout/header";
import { Footer } from "/Users/user/OneDrive/ドキュメント/tonari/src/components/layout/footer";
type Props = {
  children: React.ReactNode;
};
export const Layout: VFC<Props> = ({ children }) => {
  return (
    <div>
      <Header />
      {children}
      <Footer />
    </div>
  );
};